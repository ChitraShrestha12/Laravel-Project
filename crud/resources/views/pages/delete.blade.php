@extends('layouts.master')
@section('content')
    <form>
        <h2>Delete Record</h2>
        <p>Please enter the roll number to confirm deletion:</p>
        <input type="text" name="rollno" placeholder="Enter Roll Number">
        <div>
            <button type="submit">Yes, Delete</button>
            <a href="index.php">Cancel</a>
        </div>
    </form>
@endsection
