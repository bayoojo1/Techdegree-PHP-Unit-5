@extends('layout')
@section('body')
<div class="row mb-4">

<?php 
for ($i=1; $i <= 12; $i++) {
    echo '<div class="col-lg-4 mb-4">';
    echo '<div class="card bg-dark">';
    echo '<img class="card-img-top" src="https://source.unsplash.com/350x350/?cat,kitten,'. $i .'" alt="Card image cap">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title text-light">Pet name</h5>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
} 
?>
</div>
@endsection