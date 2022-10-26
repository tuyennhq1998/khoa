@extends('master')
@section('content')
<?php
    $t0='';$t11='';$t12='';$t31='';$t41='';
    $t21='';$t22='';$t32='';$t42='';

    foreach ($title as $k)
    {
        $ks = 'key-title';
        if ($k->$ks == 't0')
            $t0 = $k->value;
        if ($k->$ks == 't11')
            $t11 = $k->value;
        if ($k->$ks == 't21')
            $t21 = $k->value; 
        if ($k->$ks == 't31')
            $t31 = $k->value; 
        if ($k->$ks == 't41')
            $t41= $k->value;
        if ($k->$ks == 't12')
            $t12 = $k->value;
        if ($k->$ks == 't22')
            $t22 = $k->value; 
        if ($k->$ks == 't32')
            $t32 = $k->value; 
        if ($k->$ks == 't42')
            $t42= $k->value;
    }
?>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Title</h6>
                            <form action="{{url('/home-server-content')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nhập tiêu đề</label>
                                    <input type="text" class="form-control" name="t0" value="{{$t0}}"
                                        >
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4"></h6>
                            <form action="{{url('/home-server-content')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="t11" value="{{$t11}}">
                                    </div>
                                    <br><br>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="t12" value="{{$t12}}">
                                    </div>
                                    <br><br>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="t21" value="{{$t21}}">
                                    </div>
                                    <br><br>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="t22" value="{{$t22}}">
                                    </div>
                                    <br><br>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="t31" value="{{$t31}}">
                                    </div>
                                    <br><br>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="t32" value="{{$t32}}">
                                    </div>
                                    <br><br>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="t41" value="{{$t41}}">
                                    </div>
                                    <br><br>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="t42" value="{{$t42}}">
                                    </div>
                                    <br><br>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection