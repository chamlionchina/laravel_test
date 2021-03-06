﻿<li id="status-{{ $status->id }}">
  <a href="{{ route('users.show', $user->id )}}">
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/>
  </a>
  <span class="user">
    <a href="{{ route('users.show', $user->id )}}">{{ $user->name }}</a>
  </span>
  <span class="timestamp">
    {{ $status->created_at->diffForHumans() }}
  </span>
  <span class="content">《{{ $status->title }}》</span>
 <!-- <span class="content">{{ $status->content }}</span>  -->
  @can('destroy', $status)
      <form action="{{ route('statuses.destroy', $status->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger status-delete-btn">删除</button>
      </form>
	  <form action="{{ route('statuses.edit', $status->id) }}" method="get">
        <button type="submit" class="btn btn-sm btn-warning status-edit-btn">修改</button>
      </form>
	  
  @endcan
    <form action="{{ route('statuses.show', $status->id) }}" method="get">
        <button type="submit" class="btn btn-sm btn-info status-info-btn ">查看全文</button>
  </form>

</li>