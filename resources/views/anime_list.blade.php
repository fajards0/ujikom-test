@extends('layout.layout')

@section('content')

<div class="page-content">

    <!-- Anime Listing Area Start -->
    <section class="trending p-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-3">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-4">
                            <div class="filter mb-32">
                                <h2 class="h-30 bold color-white mb-32">Filter</h2>
                                <ul class="unstyled alphabetic-filter mb-32">
                                    <li><a href="#" class="active">All</a></li>
                                    <li><a href="#">A</a></li>
                                    <li><a href="#">B</a></li>
                                    <li><a href="#">C</a></li>
                                    <li><a href="#">D</a></li>
                                    <li><a href="#">E</a></li>
                                    <li><a href="#">F</a></li>
                                    <li><a href="#">G</a></li>
                                    <li><a href="#">H</a></li>
                                    <li><a href="#">I</a></li>
                                    <li><a href="#">J</a></li>
                                    <li><a href="#">K</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">N</a></li>
                                    <li><a href="#">O</a></li>
                                    <li><a href="#">P</a></li>
                                    <li><a href="#">Q</a></li>
                                    <li><a href="#">R</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">T</a></li>
                                    <li><a href="#">U</a></li>
                                    <li><a href="#">V</a></li>
                                    <li><a href="#">W</a></li>
                                    <li><a href="#">X</a></li>
                                    <li><a href="#">Y</a></li>
                                    <li><a href="#">Z</a></li>
                                    <li><a href="#">1-9</a></li>
                                </ul>
                                <ul class="filter-block unstyled mb-32">
                                    <li>
                                        <a href="#" class="filter-dropdown dropdown-toggle" id="genre" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Genre<i class="fa fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="genre">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre1">
                                                    <label class="custom-control-label" for="genre1">Action</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre2">
                                                    <label class="custom-control-label" for="genre2">Adventure</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre3">
                                                    <label class="custom-control-label" for="genre3">Avant Grade</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre4">
                                                    <label class="custom-control-label" for="genre4">Boys Love</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre5">
                                                    <label class="custom-control-label" for="genre5">Comedy</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre6">
                                                    <label class="custom-control-label" for="genre6">Demons</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre7">
                                                    <label class="custom-control-label" for="genre7">Drama</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre8">
                                                    <label class="custom-control-label" for="genre8">Ecchi</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre9">
                                                    <label class="custom-control-label" for="genre9">Fantasy</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre10">
                                                    <label class="custom-control-label" for="genre10">Girls Love</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre11">
                                                    <label class="custom-control-label" for="genre11">Gourmet</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre12">
                                                    <label class="custom-control-label" for="genre12">Harem</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre13">
                                                    <label class="custom-control-label" for="genre13">Horror</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre14">
                                                    <label class="custom-control-label" for="genre14">Isekai</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre15">
                                                    <label class="custom-control-label" for="genre15">Iyashikei</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre16">
                                                    <label class="custom-control-label" for="genre16">Josei</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre17">
                                                    <label class="custom-control-label" for="genre17">Kids</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre18">
                                                    <label class="custom-control-label" for="genre18">Magic</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre19">
                                                    <label class="custom-control-label" for="genre19">Mahou Shoujo</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre20">
                                                    <label class="custom-control-label" for="genre20">Martial Arts</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre21">
                                                    <label class="custom-control-label" for="genre21">Mecha</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre22">
                                                    <label class="custom-control-label" for="genre22">Military</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre23">
                                                    <label class="custom-control-label" for="genre23">Music</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre24">
                                                    <label class="custom-control-label" for="genre24">Mystery</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre25">
                                                    <label class="custom-control-label" for="genre25">Parody</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre26">
                                                    <label class="custom-control-label" for="genre26">Psychological</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre27">
                                                    <label class="custom-control-label" for="genre27">Reverse Harem</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre28">
                                                    <label class="custom-control-label" for="genre28">Romance</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre29">
                                                    <label class="custom-control-label" for="genre29">School</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre30">
                                                    <label class="custom-control-label" for="genre30">Sci-Fi</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre31">
                                                    <label class="custom-control-label" for="genre31">Seinin</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre32">
                                                    <label class="custom-control-label" for="genre32">Shoujo</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre41">
                                                    <label class="custom-control-label" for="genre41">Shounen</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre33">
                                                    <label class="custom-control-label" for="genre33">Slice of Life</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre34">
                                                    <label class="custom-control-label" for="genre34">Space</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre35">
                                                    <label class="custom-control-label" for="genre35">Sports</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre36">
                                                    <label class="custom-control-label" for="genre36">Super Power</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre37">
                                                    <label class="custom-control-label" for="genre37">Supernatural</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre38">
                                                    <label class="custom-control-label" for="genre38">Suspense</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre39">
                                                    <label class="custom-control-label" for="genre39">Thriller</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="genre40">
                                                    <label class="custom-control-label" for="genre40">Vampire</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="filter-dropdown dropdown-toggle" id="country" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Country<i class="fa fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="country">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="country1">
                                                    <label class="custom-control-label" for="country1">China</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="country2">
                                                    <label class="custom-control-label" for="country2">Japan</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="filter-dropdown dropdown-toggle" id="season" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Season<i class="fa fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="season">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="season1">
                                                    <label class="custom-control-label" for="season1">Fall</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="season2">
                                                    <label class="custom-control-label" for="season2">Summer</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="season3">
                                                    <label class="custom-control-label" for="season3">Winter</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="season4">
                                                    <label class="custom-control-label" for="season4">Spring</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="filter-dropdown dropdown-toggle" id="year" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Year<i class="fa fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="year">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr1">
                                                    <label class="custom-control-label" for="yr1">2023</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr2">
                                                    <label class="custom-control-label" for="yr2">2023</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr3">
                                                    <label class="custom-control-label" for="yr3">2021</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr4">
                                                    <label class="custom-control-label" for="yr4">2020</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr5">
                                                    <label class="custom-control-label" for="yr5">2019</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr6">
                                                    <label class="custom-control-label" for="yr6">2018</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr7">
                                                    <label class="custom-control-label" for="yr7">2017</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr8">
                                                    <label class="custom-control-label" for="yr8">2016</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr9">
                                                    <label class="custom-control-label" for="yr9">2015</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr10">
                                                    <label class="custom-control-label" for="yr10">2014</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr11">
                                                    <label class="custom-control-label" for="yr11">2013</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr12">
                                                    <label class="custom-control-label" for="yr12">2012</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr13">
                                                    <label class="custom-control-label" for="yr13">2010</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr14">
                                                    <label class="custom-control-label" for="yr14">2009</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr15">
                                                    <label class="custom-control-label" for="yr15">2008</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr16">
                                                    <label class="custom-control-label" for="yr16">2007</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr17">
                                                    <label class="custom-control-label" for="yr17">2006</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr18">
                                                    <label class="custom-control-label" for="yr18">2005</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr19">
                                                    <label class="custom-control-label" for="yr19">2004</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr20">
                                                    <label class="custom-control-label" for="yr20">2003</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr22">
                                                    <label class="custom-control-label" for="yr22">2002</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr23">
                                                    <label class="custom-control-label" for="yr23">2001</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr24">
                                                    <label class="custom-control-label" for="yr24">2000</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr25">
                                                    <label class="custom-control-label" for="yr25">1999</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr26">
                                                    <label class="custom-control-label" for="yr26">1998</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr27">
                                                    <label class="custom-control-label" for="yr27">1997</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr28">
                                                    <label class="custom-control-label" for="yr28">1996</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="yr29">
                                                    <label class="custom-control-label" for="yr29">1995</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="filter-dropdown dropdown-toggle" id="type" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Type<i class="fa fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="type">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="type1">
                                                    <label class="custom-control-label" for="type1">Movie</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="type2">
                                                    <label class="custom-control-label" for="type2">TV</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="type3">
                                                    <label class="custom-control-label" for="type3">OVA</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="type4">
                                                    <label class="custom-control-label" for="type4">ONA</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="type5">
                                                    <label class="custom-control-label" for="type5">Special</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="type6">
                                                    <label class="custom-control-label" for="type6">Music</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="filter-dropdown dropdown-toggle" id="status" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Status<i class="fa fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="status">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="status1">
                                                    <label class="custom-control-label" for="status1">Not Yet Released</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="status2">
                                                    <label class="custom-control-label" for="status2">Releasing</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="status3">
                                                    <label class="custom-control-label" for="status3">Completed</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="filter-dropdown dropdown-toggle" id="language" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Language<i class="fa fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="language">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="language1">
                                                    <label class="custom-control-label" for="language1">Sub</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="language2">
                                                    <label class="custom-control-label" for="language2">Dub</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="filter-dropdown dropdown-toggle" id="rating" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Rating<i class="fa fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="rating">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rating1">
                                                    <label class="custom-control-label" for="rating1">All Ages</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rating2">
                                                    <label class="custom-control-label" for="rating2">Children</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rating3">
                                                    <label class="custom-control-label" for="rating3">Teen 13 and Older</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rating4">
                                                    <label class="custom-control-label" for="rating4">Teen 17 Violence &
                                                        Profanity</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rating5">
                                                    <label class="custom-control-label" for="rating5">Teen 17 Violence & Mild
                                                        Nudity</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rating6">
                                                    <label class="custom-control-label" for="rating6">18+</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="filter-dropdown dropdown-toggle" id="sort-by" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Sort by<i class="fa fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="sort-by">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="sort1">
                                                    <label class="custom-control-label" for="sort1">Recently updated</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="sort2">
                                                    <label class="custom-control-label" for="sort2">Release Date</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="sort3">
                                                    <label class="custom-control-label" for="sort3">Trending</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="sort4">
                                                    <label class="custom-control-label" for="sort4">Rating</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="sort5">
                                                    <label class="custom-control-label" for="sort5">Most Watched</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="sort6">
                                                    <label class="custom-control-label" for="sort6">Most Popular</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="sort7">
                                                    <label class="custom-control-label" for="sort7">Number of Episodes</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <a href="https://uiparadox.co.uk/templates/vivid/v3/anime-listing.html" class="cus-btn primary mb-50">
                                    Filter
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Wishlist">
                                        <path id="Vector" d="M20.1638 1.62984C20.0638 1.4176 19.8502 1.28223 19.6156 1.28223H0.827873C0.59325 1.28223 0.37972 1.4176 0.279583 1.62984C0.179526 1.84207 0.210885 2.09294 0.360161 2.27398L7.58242 11.0337V19.111C7.58242 19.3207 7.6908 19.5155 7.86893 19.626C7.96656 19.6866 8.07737 19.7171 8.18858 19.7171C8.28047 19.7171 8.37269 19.6962 8.45771 19.6541L12.5156 17.6429C12.7218 17.5407 12.8522 17.3306 12.8525 17.1005L12.8604 11.0339L20.0831 2.2739C20.2325 2.09294 20.2639 1.84199 20.1638 1.62984ZM11.787 10.4304C11.6977 10.5387 11.6487 10.6747 11.6485 10.8152L11.6408 16.7234L8.79482 18.134V10.816C8.79482 10.6753 8.74592 10.5389 8.65637 10.4304L2.11325 2.49446H18.3301L11.787 10.4304Z" fill="#1B1B1B"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-8">
                            <div class="top-anime mb-12">
                                <h2 class="h-30 bold color-white mb-12">Top Rated Anime</h2>
                                <p class="sec sm mb-24">
                                    Based on your filter
                                </p>
                                <div class="row">
                                    <div class="col-xxl-12 col-md-6">
                                        <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="anime-card mb-12">
                                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-27.png" alt="">
                                            <div class="text-block">
                                                <div class="sm-title">
                                                    <h6 class="color-white">The Daily Life of the Immortal King</h6>
                                                    <p class="color-medium-gray sm sec">Season 3</p>
                                                </div>
                                                <ul class="tag unstyled">
                                                    <li>Action</li>
                                                    <li>2021</li>
                                                    <li>EP-24</li>
                                                    <li class="icon"><i class="fas fa-star"></i></li>
                                                    <li>8.5</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xxl-12 col-md-6">
                                        <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="anime-card mb-12">
                                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-28.png" alt="">
                                            <div class="text-block">
                                                <div class="sm-title">
                                                    <h6 class="color-white">The Daily Life of the Immortal King</h6>
                                                    <p class="color-medium-gray sm sec">Season 3</p>
                                                </div>
                                                <ul class="tag unstyled">
                                                    <li>Action</li>
                                                    <li>2021</li>
                                                    <li>EP-24</li>
                                                    <li class="icon"><i class="fas fa-star"></i></li>
                                                    <li>8.5</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xxl-12 col-md-6">
                                        <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="anime-card mb-12">
                                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-27.png" alt="">
                                            <div class="text-block">
                                                <div class="sm-title">
                                                    <h6 class="color-white">The Daily Life of the Immortal King</h6>
                                                    <p class="color-medium-gray sm sec">Season 3</p>
                                                </div>
                                                <ul class="tag unstyled">
                                                    <li>Action</li>
                                                    <li>2021</li>
                                                    <li>EP-24</li>
                                                    <li class="icon"><i class="fas fa-star"></i></li>
                                                    <li>8.5</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xxl-12 col-md-6">
                                        <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="anime-card mb-12">
                                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-29.png" alt="">
                                            <div class="text-block">
                                                <div class="sm-title">
                                                    <h6 class="color-white">The Daily Life of the Immortal King</h6>
                                                    <p class="color-medium-gray sm sec">Season 3</p>
                                                </div>
                                                <ul class="tag unstyled">
                                                    <li>Action</li>
                                                    <li>2021</li>
                                                    <li>EP-24</li>
                                                    <li class="icon"><i class="fas fa-star"></i></li>
                                                    <li>8.5</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xxl-12 col-md-6">
                                        <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="anime-card mb-12">
                                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-30.png" alt="">
                                            <div class="text-block">
                                                <div class="sm-title">
                                                    <h6 class="color-white">The Daily Life of the Immortal King</h6>
                                                    <p class="color-medium-gray sm sec">Season 3</p>
                                                </div>
                                                <ul class="tag unstyled">
                                                    <li>Action</li>
                                                    <li>2021</li>
                                                    <li>EP-24</li>
                                                    <li class="icon"><i class="fas fa-star"></i></li>
                                                    <li>8.5</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9">
                    <p class="sm-title mb-40">154 items</p>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-22.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Demon Slayer</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-3.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Hells Paradise</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-8.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Fate Stay Night</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-9.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Steins Gate</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-19.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Arcane</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-12.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Arcane</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-8.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Arcane</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-22.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Arcane</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-23.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Arcane</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-24.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Arcane</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-25.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Arcane</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-11.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Arcane</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-4.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Arcane</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-5.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Arcane</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-40">
                            <div class="card st-2 m-0">
                                <div class="img-block mb-20">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-6.png" alt="">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                        Stream Now
                                        <i class="far fa-play"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="h-24 color-white bold">Arcane</h4>
                                    <ul class="tag unstyled">
                                        <li>Action</li>
                                        <li>2021</li>
                                        <li>EP-24</li>
                                        <li class="icon"><i class="fas fa-star"></i></li>
                                        <li>8.5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination unstyled">
                        <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Anime Listing Area end -->



</div>
<!-- Main Content End -->

@endsection

