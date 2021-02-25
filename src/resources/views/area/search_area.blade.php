@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jmap.js') }} "></script>
<script type = "text/javascript">
    $(document).ready(function() {
        $('#jmap').jmap({
    width: '100%',
    height: '450px',
    lineColor: '#EFE4A6',
    lineWidth: 2,
    showTextShadow: true,
    backgroundColor: '#6FCFDD',
    backgroundRadius: '0.5rem',
    backgroundPadding: '0.5rem',
    dividerColor: '#EFE4A6',
    showPrefectureName: true,
    showRoundedPrefecture: true,
    prefectureNameType: 'full',
    prefectureBackgroundColor: '#62B34C',
    prefectureBackgroundHoverColor: '#95A834',
    prefectureLineColor: '#EFE4A6',
    prefectureLineHoverColor: '#ffffff',
    prefectureLineWidth: '2px',
    prefectureLineGap: '0px',
    prefectureInnerLineWidth: '1px',
    prefectureInnerLineColor: '#EFE4A6',
    prefectureInnerLineType: 'outset',
    prefectureRadius: '15px',
    prefectureLineY: '2px',
    prefectureLineX: '2px',
    fontSize: '0.6rem',
    fontColor: '#fff'
});
    });
</script>
@section('content')
<div class="container">
    <div id="jmap">
    </div>
</div>
@endsection