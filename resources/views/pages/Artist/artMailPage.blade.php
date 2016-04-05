@extends('pages.Artist.artMainTemp')

@section('ArtContent')

    {{--This file is for reference purposes. Not used in this project--}}
    <br/>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    {!! Form::open(array( 'url' => '/cMail','class' => 'form','novalidate' => 'novalidate','files' => true)) !!}
                            <div class="box-header with-border">
                                <h3 class="box-title">Compose New Message</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <input class="form-control" name="toH" placeholder="To:" value="@if(isset($add)){!! $add !!}@endif">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="subjectH" placeholder="Subject:">
                                </div>
                                <div class="form-group">
                                    <textarea id="compose-textarea" class="form-control" name="mailDets" style="height: 300px"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="btn btn-default btn-file">
                                        <i class="fa fa-paperclip"></i> Attachment
                                        {!! Form::file('file', null) !!}
                                    </div>
                                    <p class="help-block">Max. 32MB</p>
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                                </div>
                            </div><!-- /.box-footer -->
                        </div><!-- /. box -->
                     {!! Form::close() !!}
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->


@stop