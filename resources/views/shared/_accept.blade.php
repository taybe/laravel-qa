                                    @can('accept', $model)
                                        <a title="Mark this answer as best answer" 
                                            class="{{ $model->status }} mt-2"
                                            onclick="event.preventDefault(); document.getElementById('accept-answer-{{ $model->id }}').submit();">
                                            <i class="fa fa-check fa-2x"></i>
                                        </a>
                                    @else
                                        @if ($model->is_best)
                                            <a title="The question owner accepted this answer as best answer" 
                                            class="{{ $model->status }} mt-2">
                                            <i class="fa fa-check fa-2x"></i>
                                        </a>
                                        @endif
                                    @endcan
                                        <form id="accept-answer-{{ $model->id }}" action="{{ route('answers.accept', $model->id) }}" method="POST" style="display:none">
                                        @csrf
                                        </form>