@extends('layout.master')

@section('title') TWS | Dashboard @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '320',
            title: 'Article Successfully Updated'
        })
    </script>
@endif

@if (session('deleted'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '320',
            title: 'Article Successfully Deleted'
        })
    </script>
@endif

<div class="dashboard-container">         
    @if ($posts->count())
        @foreach ($posts as $post)
            @if ($post->user_id === auth()->user()->id)
                <div class="article">
                    <div class="article-content">
                        <p class="title"> {{ $post->title }} </p>
                        <p class="date-time"> {{ $post->updated_at->format('M d, Y') }} &nbsp;&nbsp; 
                            <span> {{ $post->updated_at->diffForHumans() }} </span>
                        </p>
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
    @else
        <div>
            There is no post.
        </div>
    @endif

</div>

@endsection