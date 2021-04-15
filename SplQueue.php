<?php
include_once 'Dancer.php';

$dancerMale1 = new Dancer("Tu","Male");
$dancerMale2 = new Dancer("Son","Male");
$dancerMale3 = new Dancer("Hung","Male");
$dancerMale4 = new Dancer("Quan","Male");

$dancerFemale1 = new Dancer("Ly","Female");
$dancerFemale2 = new Dancer("Trang","Female");
$dancerFemale3 = new Dancer("Nhung","Female");


$dancerFemale4 = new Dancer("Hong","Female");
$dancerFemale5 = new Dancer("Hoa","Female");
$dancerFemale6 = new Dancer("Ha","Female");


$dancerMale = new SplQueue();
$dancerMale->enqueue($dancerMale1);
$dancerMale->enqueue($dancerMale2);
$dancerMale->enqueue($dancerMale3);
$dancerMale->enqueue($dancerMale4);
echo "<pre>";
//var_dump($dancerMale);

$dancerFemale = new SplQueue();
$dancerFemale->enqueue($dancerFemale1);
$dancerFemale->enqueue($dancerFemale2);
$dancerFemale->enqueue($dancerFemale3);

$dancerFemale->enqueue($dancerFemale4);
$dancerFemale->enqueue($dancerFemale5);
$dancerFemale->enqueue($dancerFemale6);


echo "<pre>";
//var_dump($dancerFemale);

$countMale = $dancerMale->count();
$countFemale = $dancerFemale->count();
while ($dancerMale->isEmpty() == false && $dancerFemale->isEmpty() == false) {
    echo $dancerMale->dequeue()->name ." ". "dance with"." " . $dancerFemale->dequeue()->name;
    echo "<pre>";
        if ($dancerMale->isEmpty() == true )
            echo "Male please wait";
        if ($dancerFemale->isEmpty() == true )
            echo "Female please wait";

}
echo "<pre>";
if ($dancerMale->isEmpty() == true )
    print_r($dancerFemale);
if ($dancerFemale->isEmpty() == true )
    print_r($dancerMale);

