<section class="dark:bg-gray-900 py-8 lg:py-16 {{$comment !=null ? 'hidden' : ''}}" id="formulario{{$comment !=null ? $comment->id : 'aiudamecristo'}}">
            <div class="max-w-5xl mx-auto px-4">
                <div class="flex justify-between items-center mb-6">
                  <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Comentar</h2>
              </div>


              <form  action="{{route('comments.store')}}" method="POST" class="mb-6">
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
