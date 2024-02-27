@extends('layouts.app')

@section('content')


    <h2>ADDITION!</h2>
    <div>
        {{$somme}}
    </div>
    <form action="{{ route('additionSimple')}}" method="POST" >
    @csrf
    <table>
        <tr>
            <td>Nombre 1</td>
            <td><input type="text" name="a"></td>
        </tr>
        <tr>
            <td>Nombre 2</td>
            <td><input type="text" name="b"></td>
        </tr>
        <tr>
            <td><input type="submit" value="ADDITIONNER" ></td>
        </tr>
    </table>
    </form>

@endsection
