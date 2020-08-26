@extends('layout')
@section('body')
<div class="row mb-5">
    <div class="col-12">
            <div class="card bg-dark">
            <img class="card-img-top" src="https://source.unsplash.com/800x400/?dog,cat" alt="Card image cap">
            <div class="card-footer text-light text-center">
                <h2>Featured</h2>
            </div>
        </div>
    </div>
</div> <!-- end row -->
<div class="row mb-4">
<?php 
for ($i=1; $i <= 12; $i++) {
    echo '<div class="col-lg-4 mb-4">';
    echo '<div class="card bg-dark">';
    echo '<img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,cat,'. $i .'" alt="Card image cap">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title text-light">Pet name</h5>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
} 
?>
</div>
@endsection

