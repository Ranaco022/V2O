@extends('layouts.app')

@section('content')
<section id="home" class="home-section bg-gray">
        <div class="container">
          <img src="{{ asset('/img/banner.png') }}" style="width:100%">

<div style="margin:auto">
          <table style="height: 354px;" width="735";  >
	<tbody>
		<tr>
			<td style="width: 183.5px;">&nbsp;<img src="/img/dog-2.svg" style="width: 50%; height:50%; text-align: center;"></td>
			<td style="width: 183.5px;">&nbsp;<img src="/img/teddy-bear.svg" style="width: 50%; height:50%"></td>
			<td style="width: 183.5px;">&nbsp;<img src="/img/couple.svg" style="width: 50%; height:50%"></td>
			<td style="width: 183.5px;">&nbsp;<img src="/img/football.svg" style="width: 50%; height:50%"></td>
		</tr>
		<tr>
			<td style="width: 183.5px; text-align: center;">&nbsp;
				<h4>Animal Care</h4>
				<p>This rewarding volunteer role would suit applicants that love animals and are committed to improving their welfare.</p>
			</td>
			<td style="width: 183.5px; text-align: center;">&nbsp;
				<h4>Child Care</h4>
				<p>People who volunteer with kids get to provide education, healthcare, and most importantly loving attention to these young souls.</p>
			</td>
			<td style="width: 183.5px; text-align: center;">&nbsp;
				<h4>Senior Citizens Care</h4>
				<p>Whether it&rsquo;s at a community center or a nursing home, there are many opportunities to spend time with seniors all across the country.</p>
			</td>
			<td style="width: 183.5px; text-align: center;">&nbsp;
				<h4>Sports</h4>
				<p>Lead after school clubs and leagues, physical education lessons, and community sports. Help young people have fun.</p>
			</td>
		</tr>
	</tbody>
</table>
</div>
<!-- DivTable.com -->
@endsection
