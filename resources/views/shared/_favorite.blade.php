                            <a title="{{ Auth::guest() ? 'Login to Favorite' : ($model->is_favorited ? 'Marked as Favorite (Click to Undo)' : 'Mark as Favorite') }}" class="favorite mt-2 {{ Auth::guest() ? 'off' : ($model->is_favorited ? 'favorited' : '') }}" onclick="event.preventDefault(); document.getElementById('favorite-{{ $name }}-{{ $model->id }}').submit();">
                                <i class="fa fa-star fa-lg"></i>
                                <span class="favorites-count">{{ $model->favorites_count }}</span>
                            </a>
                             <form id="favorite-{{ $name }}-{{ $model->id }}" action="/{{ $firstUriSegment }}/{{ $model->id }}/favorites" method="POST" style="display:none">
                                    @csrf
                                    @if ($model->is_favorited)
                                        @method ('DELETE')
                                    @endif
                            </form>