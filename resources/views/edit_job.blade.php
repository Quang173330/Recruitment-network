@extends('layouts.app')

@section('content')
<div class="container">
    <div class="single">
        <div class="form-container">
            <h2>@lang('job.edit')</h2>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <form action="{{ route('jobs.update', ['job' => $job->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="title">@lang('job.title')</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" class="form-control input-sm" value="{{ $job->title }}" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="experience">@lang('job.exp')</label>
                                <div class="col-md-9">
                                    <input type="text" name="experience" class="form-control input-sm" value="{{ $job->experience }}" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="salary">@lang('job.salary')</label>
                                <div class="col-md-9">
                                    <input type="text" name="salary" class="form-control input-sm" value="{{ $job->salary }}" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="tags">@lang('job.tag')</label>
                                <div class="row">
                                    <div class="col-md-2">
                                        <tr>
                                            <td class="table-text"><div>@lang('job.skill')</div></td>
                                            <td><table class="table">
                                                <tbody>
                                                    @foreach ($skills as $skill)
                                                        <tr class="unread checked">
                                                            <td class="hidden-xs">
                                                                @if ($tags->contains($skill))
                                                                    <input type="checkbox" checked name="tag[]" value="{{ $skill->id }}"class="checkbox">
                                                                @else
                                                                    <input type="checkbox" name="tag[]" value="{{ $skill->id }}"class="checkbox">  
                                                                @endif
                                                            </td>
                                                            <td class="hidden-xs">
                                                                {{ $skill->name }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table></td>
                                        </tr>
                                    </div>
                                    <div class="col-md-2">
                                        <tr>
                                            <td class="table-text"><div>@lang('job.language')</div></td>
                                            <td>
                                                <table class="table">
                                                    <tbody>
                                                        @foreach ($langs as $lang)
                                                            <tr class="unread checked">
                                                                <td class="hidden-xs">
                                                                    @if ($tags->contains($lang))
                                                                        <input type="checkbox" checked name="tag[]" value="{{ $lang->id }}"class="checkbox">                                                                        
                                                                    @else
                                                                        <input type="checkbox" name="tag[]" value="{{ $lang->id }}"class="checkbox">
                                                                    @endif
                                                                </td>
                                                                <td class="hidden-xs">
                                                                    {{ $lang->name }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </div>
                                    <div class="col-md-2">
                                        <tr>
                                            <td class="table-text"><div>@lang('job.working_time')</div></td>
                                            <td><table class="table">
                                                <tbody>
                                                    @foreach ($workingTimes as $workingTime)
                                                        <tr class="unread checked">
                                                            <td class="hidden-xs">
                                                                @if ($tags->contains($workingTime))
                                                                <input type="checkbox" checked name="tag[]" value="{{ $workingTime->id }}"class="checkbox">
                                                                @else
                                                                <input type="checkbox" name="tag[]" value="{{ $workingTime->id }}"class="checkbox">             
                                                                @endif
                                                            </td>
                                                            <td class="hidden-xs">
                                                                {{ $workingTime->name }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table></td>
                                        </tr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="col-md-3 control-lable" for="description">@lang('job.description')</label>
                                <div class="col-md-9">
                                    <textarea cols="77" rows="6"  id="demo" class="ckeditor" name="description">{{ $job->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-actions floatRight">
                                <input type="submit" value="@lang('job.save')" class="btn btn-primary btn-sm">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection