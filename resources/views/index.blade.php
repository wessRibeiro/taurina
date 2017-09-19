@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div id="teste" class="vegas-container">
x
</div>

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#teste").vegas({
                timer: false,
				transitionDuration: 100,
                cover: true,
                slides: [
                    { src: "/images/slides_home/slide_1.jpg" },
                    { src: "/images/slides_home/slide_2.jpg" },
                    { src: "/images/slides_home/slide_3.jpg" },
                ]
            });
        });
    </script>
@endsection