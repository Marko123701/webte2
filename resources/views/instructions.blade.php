<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        #mainDiv {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        p{
            font-size: larger;
        }
    </style>
</head>
    @extends('layouts.app')

    @section('content')
    <div id="mainDiv">
        <div class="text-center">
            <h3 class="mb-5 fw-bold">Instructions</h3>
        </div>
        <div class="text-center">
            <h2 class="mb-4 fw-bold">For Teacher</h2>
            <p>The teacher has following functionalities:<br>
• Define how many points a student can score for a particular set of exercises (all exercises defined in one file will have the same score, meaning that the score assigned to a generated exercise will also apply to the student).<br>
• View a clear table of all students (name, surname, student ID) with information on how many tasks each student generated, how many they submitted, and how many points they obtained. Students can be sorted based on all the information mentioned above (when numerical values are equal, sorting by surname is used as a secondary criterion). It is necessary to export this table to a CSV file.<br>
• View the tasks generated by each student, the tasks they submitted, the submitted result along with information on whether it was correct, and the number of points obtained for each task.</p>
        </div>
        <div class="text-center">
            <h2 class="mb-4 fw-bold">For Student</h2>
            <p>The student has following functionalities:<br>
                Generate exercise examples for solving.<br>
Provide an overview of assigned tasks, including exercises that have been generated specifically for each student, along with the option to submit their solutions. The overview should clearly indicate which tasks have been submitted and which ones are pending.</p>
        </div>
        <div class="text-center">
        <form method="POST" action="{{ route('view-pdf') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Download PDF</button>
        </form>
    </div>
    </div>

    @endsection