@extends('layouts.app')

@section('content')

<h2>MULTIPLICATION!</h2>
    <div>
        {{$resultat}}
    </div>
    <form action="{{ route('multiplication')}}" method="POST" >
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
            <td><input type="submit" value="MULTIPLIER" ></td>
        </tr>
    </table>
    </form>
@endsection
