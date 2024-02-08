<?php

use App\Models\Comment;

  function generar_comentarios(Comment $comment){
    if($comment->comments != null){
        foreach ($comment->comments as $comentario) {
    ?>
    <article class="mt-4 mb-4 mx-auto max-w-5xl p-6 text-base bg-white rounded-lg dark:bg-gray-900">
    <div class="flex justify-between items-center mb-2">
        <div class="flex items-center">
            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                    class="mr-2 w-6 h-6 rounded-full"
                    src="<?= asset('storage/uploads/users/' . $comentario->user->image) ?>"
                    alt="<?=$comentario->user->name?>"><?=$comentario->user->name?></p>
            <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                    title="February 8th, 2022">Feb. 8, 2022</time></p>
        </div>
        <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            type="button">
        </button>
    </div>
    <p class="text-gray-500 dark:text-gray-400"><?=$comentario->content?></p>
    <div class="flex items-center mt-4 space-x-4">
        <button type="button"
            class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
            <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
            </svg>
            Reply
        </button>
    </div>
</article>

<section class=" dark:bg-gray-900 py-8 lg:py-16">
            <div class="max-w-5xl mx-auto px-4">
                <div class="flex justify-between items-center mb-6">
                  <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Comentar</h2>
              </div>


              <form  action="<?=route('comments.store')?>" method="POST" class="mb-6">
                @csrf
                  <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                      <label for="comment" class="sr-only">Your comment</label>
                      <textarea name=content id="comment" rows="6"
                          class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                          placeholder="Escribe un algo meneador..." required></textarea>
                      <input type="hidden" name="article" value="{{$article!=null ? $article->id : null}}">
                      <input type="hidden" name="comment" value="{{$comment !=null ? $comment->id : null}}">
                  </div>
                  <button type="submit"
                      class="inline-flex items-center bg-orange-500 py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                      Publicar Comentario
                  </button>
              </form>
            </div>
        </section>

<?php
        }
    }
 }

