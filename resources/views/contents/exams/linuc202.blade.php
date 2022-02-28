<div class="container">
    <div class="card mt-4 text-center">
        <h2 class="card-title mt-3">Linuc 202試験</h2>
        <div class="card-body">
            <form action="{{ route('quizzes.exercise') }}" method="POST">
                @csrf
                @foreach($small_category as $category)       
                    @if($loop->first)
                        <input type="hidden" name="exam-subject" value="{{ $category->large_categories_id }}">
                    @endif
                    @if($category->large_categories_id === 4)
                    <div class="form-group form-check">    
                        <input type="checkbox" id="smallcategory{{$category->id}}" class="form-check-input checkTarget" name="smallcategories[]" value="{{$category->id}}">
                        <label class="form-check-label" for="smallcategory{{$category->id}}">{{ $category->name }}</label>
                    </div>
                    @endif
                @endforeach

                <div class="form-group">
                    <label for="DisplayedNum">表示件数</label>
                    <div class="form-row d-flex align-items-center justify-content-center">
                        <div class="col-2">
                            <select class="form-control text-center" id="DisplayedNum" name="DisplayedNum">
                                <option selected value="">指定なし</option>
                                <option value="1">1問</option>
                                <option value="5">5問</option>
                                <option value="10">10問</option>
                                <option value="15">15問</option>
                                <option value="30">30問</option>
                            </select> 
                        </div>
                    </div>
                </div>

                <div class="form-group form-check">    
                    <input type="checkbox" class="form-check-input" id="randomExercise" name="randomExercise" value="true">
                    <label class="form-check-label" for="randomExercise">間違った問題をランダム出題する(10問出題)</label>
                </div>

                <button type="submit" class="btn btn-primary rounded-pill">問題スタート</button>
            </form>
        </div>
    </div>
</div>