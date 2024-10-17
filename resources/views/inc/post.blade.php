<div class="mt-3">
    <div class="card">
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:50px" class="me-2 avatar-sm rounded-circle" src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="p-2 text-red-500 rounded-md border w-8 h-8 items-center justify-center flex">X</button>
                    </form>
                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">View Post</a>
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
                    <div>
                        <h5 class="card-title mb-0">
                            <a href="#">
                                {{ $post->name }}
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="fs-6 fw-light text-muted">
                {{ $post->content }}
            </p>
            <div class="d-flex justify-content-between">
                <div>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1"></span> {{ $post->likes }} </a>
                </div>
                <div>
                    <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span> {{ $post->created_at }} </span>
                </div>
            </div>

            <hr>

            <!-- Comment Section -->
            <div class="mb-3">
                <form action="{{ route('comments.store', $post->id) }}" method="POST">
                    @csrf
                    <textarea class="fs-6 form-control" rows="1" name="content" placeholder="Write a comment..."></textarea>
                    @error('content')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                    <button class="btn btn-primary btn-sm mt-2">Post Comment</button>
                </form>
            </div>

            <hr>

            <!-- Display Comments -->
            @foreach ($post->comments as $comment)
                <div class="d-flex align-items-start mt-2">
                    <img style="width:35px" class="me-2 avatar-sm rounded-circle" src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Commenter" alt="Commenter Avatar">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <h6 class="">{{ $comment->content }}</h6>
                            <small class="fs-6 fw-light text-muted">{{ $comment->created_at }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
