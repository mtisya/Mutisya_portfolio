@props(['posts'])

<x-post-featured-card :post="$posts[0]" />

@include('posts.biosection')

@include('posts.projectsection')

@include('posts.verticaltimeline')

