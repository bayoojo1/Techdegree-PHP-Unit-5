@extends('layout')
<div class="row mb-4">

<?php 
for ($i=0; $i <= 11; $i++) {
    echo '<div class="col-lg-4 mb-4">';
    echo '<div class="card bg-dark">';
    echo '<img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,puppy,'. $i .'" alt="Card image cap">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title text-light">Pet name</h5>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
} 
?>
</div>
           <!-- <div class="col-lg-4 mb-4">
                <div class="card bg-dark">
                    <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,puppy,1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-light">Pet name</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-dark">
                    <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,puppy,2" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-light">Pet name</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-dark">
                    <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,puppy,3" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-light">Pet name</h5>
                    </div>
                </div>
            </div>  
        </div> -->
        <!-- end row -->
        <!-- <div class="row mb-4">
            <div class="col-lg-4 mb-4">
                <div class="card bg-dark">
                    <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,puppy,4" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-light">Pet name</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-dark">
                    <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,puppy,5" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-light">Pet name</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-dark">
                    <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,puppy,6" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-light">Pet name</h5>
                    </div>
                </div>
            </div>  -->
        <!-- </div>end row -->
        <!-- <div class="row mb-4">
            <div class="col-lg-4 mb-4">
                <div class="card bg-dark">
                    <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,puppy,7" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-light">Pet name</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-dark">
                    <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,puppy,8" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-light">Pet name</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-dark">
                    <img class="card-img-top" src="https://source.unsplash.com/350x350/?dog,puppy,9" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-light">Pet name</h5>
                    </div>
                </div>
            </div> 
        </div> -->