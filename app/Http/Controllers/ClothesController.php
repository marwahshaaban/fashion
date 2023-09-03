<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Rating;
use App\User;

class ClothesController extends Controller
{
    protected $products       = [];
    protected $featureWeight  = 1;
    protected $priceWeight    = 1;
    protected $categoryWeight = 1;
    protected $priceHighRange = 1000;
 
    //
    public function man()
    {
        $products=Product::where('gender','men')->get();
        return view('categoryies.shirt')->with('products',$products);
    }
    public function woman()
    {
        $products=Product::where('gender','woman')->get();
        return view('categoryies.shirt')->with('products',$products);
    }
    public function dresses()
    {
        $products=Product::where('type','dresses')->get();
        return view('categoryies.shirt')->with('products',$products);
    }
    public function shirts()
    {
        $products=Product::where('type','shirt')->get();
        return view('categoryies.shirt')->with('products',$products);
    }

    public function jeans()
    {
        $products=Product::where('type','jeans')->get();
        return view('categoryies.shirt')->with('products',$products);
    }

    public function swimwear()
    {
        $products=Product::where('type','swimwear')->get();
        return view('categoryies.shirt')->with('products',$products);
    }

    public function sleepwear()
    {
        $products=Product::where('type','sleepwear')->get();
        return view('categoryies.shirt')->with('products',$products);
    }

    public function sportswear()
    {
        $products=Product::where('type','sportswear')->get();
        return view('categoryies.shirt')->with('products',$products);
    }

    public function jumpsuites()
    {
        $products=Product::where('type','jumpsuites')->get();
        return view('categoryies.shirt')->with('products',$products);
    }

    public function blazers()
    {
        $products=Product::where('type','blazers')->get();
        return view('categoryies.shirt')->with('products',$products);
    }

    public function jackets()
    {
        $products=Product::where('type','jackets')->get();
        return view('categoryies.shirt')->with('products',$products);
    }

    public function shoes()
    {
        $products=Product::where('type','shoes')->get();
        return view('categoryies.shirt')->with('products',$products);
    }



    public function allproduct(){

        $user=auth()->user();
        $products=Product::all();
        return view('products.allproducts')->with('products',$products);
    }

    public function addrating(Request $request){

        $user=auth()->user();
        $product=Product::find($request->post);
        $rating=new Rating;
        if($request->type=='sosolike'){
        $rating->rat= 5;
        $rating->product_id=$product->id;
        $rating->user_id=$user->id;}
        elseif($request->type=='solike'){
        $rating->rat= 4;
        $rating->product_id=$product->id;
        $rating->user_id=$user->id;}
        elseif($request->type=='like'){
        $rating->rat= 3;
        $rating->product_id=$product->id;
        $rating->user_id=$user->id;}
        elseif($request->type=='nolike'){
        $rating->rat= 2;
        $rating->product_id=$product->id;
        $rating->user_id=$user->id; }
        elseif($request->type=='dislike'){
            $rating->rat= 1;
            $rating->product_id=$product->id;
            $rating->user_id=$user->id;

            }
        $rating->save();
        return response()->json([
            'bool'=>true
        ]);
    }
        public function recomendation($id){
            $product1=Product::find($id);

            $userObjects = Rating::  select('user_id')


                        ->where('product_id', $id)

                        ->where('rat', 5)

                        ->get()

                        ->toArray();
                       

            $users = [];
            foreach ($userObjects as $userObject) {

                array_push($users, $userObject);

            }

            $person= $users;


            $ratingObjects = Rating::

                whereIn('user_id', $person)

                ->select('product_id', 'user_id', 'rat')

                ->get();



            $movieScores = [];



            foreach ($ratingObjects as $ratingObject) {

                if (isset($movieScores[$ratingObject->product_id])) {

                    $movieScores[$ratingObject->product_id] += $ratingObject->rat;

                } else {

                    $movieScores[$ratingObject->product_id] = $ratingObject->rat;

                }

            }



            arsort($movieScores);

            unset($movieScores[$id]);

            $movieScores = array_slice($movieScores, 0, 6, true);

            $content_movies = [];



            foreach ($movieScores as $product_id => $score) {

            $content_suggested_movie = Product::find($product_id);

            $content_movies[] = $content_suggested_movie;

            }

            $products=Product::all();
           
            foreach ($products as $product) {

                $similarityScores = [];

                foreach ($products as $_product) {
                    if ($product->id === $_product->id) {
                        continue;
                    }
                    $similarityScores['product_id_' . $_product->id]=$this->calculateSimilarityScore($product, $_product);
                }
                $matrix['product_id_' . $product->id] = $similarityScores;
            }
           
            $products1=[];
            foreach ($products as $product) {
                $products1[]=$product;
            }
            $similarities   = $matrix['product_id_' . $id] ?? null;
            
            $sortedProducts = [];
            if (is_null($similarities)) {
                throw new Exception('Can\'t find product with that ID.');
            }
            arsort($similarities);
          
            foreach ($similarities as $productIdKey => $similarity) {
                $id      = intval(str_replace('product_id_', '', $productIdKey));
             
                $products = array_filter($products1, function ($product) use ($id) 
                { return $product->id === $id; });
                
                
                if (! count($products)) {
                    continue;
                }
              
                $product = $products[array_keys($products)[0]];
             
                $product->similarity = $similarity;
              
                $sortedProducts[] = $product;
            }
          
            $sortedProducts = array_slice($sortedProducts, 0, 3, true);

           $product22=$sortedProducts;

              return view("allrecomendation",compact( "product22","content_movies"))->with('product',$product1);


        }
        // public function search(Request $request){
        //     $request->validate([
        //         'name' => 'required'
        //     ]);
        //     $name = $request->name;
        //     $products=Product::where('name' , 'like' , '%'. $name .'%')->get();

        //         return view('categoryies.shirt')->with('products',$products);




        // }
        // public function showsearch(){
        //     return view ('pages.showsearch');
        // }
        protected function calculateSimilarityScore($productA, $productB)
        {
            $productAFeatures = ( $productA->type);
            $productBFeatures = ($productB->type);
    
            return array_sum([
                ($this->hamming($productAFeatures, $productBFeatures) * $this->featureWeight),
                ($this->euclidean(
                    $this->minMaxNorm([$productA->price], 0, $this->priceHighRange),
                    $this->minMaxNorm([$productB->price], 0, $this->priceHighRange)
                ) * $this->priceWeight),
                ($this->jaccard($productA->description, $productB->description) * $this->categoryWeight)
            ]) / ($this->featureWeight + $this->priceWeight + $this->categoryWeight);
        }
        public static function hamming(string $string1, string $string2, bool $returnDistance = false): float
        {
            $a        = str_pad($string1,strlen($string1) +(strlen($string2) - strlen($string1)), ' ');
           
            $b        = str_pad($string2, strlen($string2)+(strlen($string1) - strlen($string2)), ' ');
          
            
            $distance = count(array_diff_assoc(str_split($a), str_split($b)));

            if ($returnDistance) {
                return $distance;
            }
           return(strlen($a) - $distance) / strlen($a);
           
        }
        public static function jaccard(string $string1, string $string2, string $separator = ','): float
        {
            $a            = explode($separator, $string1);
            
            $b            = explode($separator, $string2);
            
            $intersection = array_unique(array_intersect($a, $b));
            
            $union        = array_unique(array_merge($a, $b));
          
           return( count($intersection) / count($union));
        }

        public static function euclidean(array $array1, array $array2, bool $returnDistance = false): float
        {
            $a   = $array1;
           
            $b   = $array2;
          
            $set = [];

            foreach ($a as $index => $value) {
              
                $set[] = $value - $b[$index] ?? 0;
               
            }

            $distance = sqrt(array_sum(array_map(function ($x) { return pow($x, 2); }, $set)));
       
            
            if ($returnDistance) {
                return( $distance);
            }
            // doesn't work well with distances larger than 1
            // return 1 / (1 + $distance);
            // so we'll use angular similarity instead
           return( 1 - $distance);
        }
        public static function minMaxNorm(array $values, $min = null, $max = null): array
        {
            $norm = [];
            $min  = $min ?? min($values);
            $max  = $max ?? max($values);

            foreach ($values as $value) {
                $numerator   = $value - $min;
                $denominator = $max - $min;
                $minMaxNorm  = $numerator / $denominator;
                $norm[]      = $minMaxNorm;
            }
            return $norm;
        }



    }
