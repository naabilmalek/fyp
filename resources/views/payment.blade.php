@include('inc.header')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Help others! Do your part!</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/submitfund/'.$project_id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="funder_email" type="email" class="form-control" name="funder_email"  required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fund_amount') ? ' has-error' : '' }}">
                            <label for="Fund" class="col-md-4 control-label">Amount</label>

                            <div class="col-md-6">
                                <input id="fund_amount" type="text" class="form-control" name="fund_amount" required>

                                @if ($errors->has('fund_amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fund_amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Fund Now!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('inc.footer')