@extends('layout.master')

@section('title') TWS | Dashboard @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<div class="dashboard-container">
    <?php
        if(isset($_SESSION['delete'])){ ?>
            <script>
                Swal.fire({
                    icon: 'info',
                    width: '350',
                    title: 'Incorrect Password!',
                    text: ''
                })
                console.log(123)
            </script>
    <?php } ?>
            
    @if ($posts->count())
        @foreach ($posts as $post)
            @if ($post->user_id === auth()->user()->id)
                <div class="article">
                    <div class="article-content">
                        <p class="title"> {{ $post->title }} </p>
                        <p class="date-time"> {{ $post->updated_at->format('M d, Y') }} &nbsp;&nbsp; {{ $post->updated_at->diffForHumans() }}</p>
                        <p class="author"> {{ $post->author }} </p>
                        <p class="text-content"> {{ $post->article }} </p>
                    </div>
                    <div class="article-button">
                        <input type="hidden" value="{{ $post->user_id }}">
                        <a href="/?article={{ $post->id }}" title="Read more"> Read more </a>
                        <a href="{{ route('update', $post->id) }}" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('delete', $post->id) }}" title="Delete">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>       
            @endif
        @endforeach
    @endif

</div>

@endsection