@extends('layouts.app')

@section('content')
<section id="home" class="home-section bg-gray">
    <div class="container">
        <img src="{{ asset('/img/banner.png') }}" style="width:100%">
        <p><h2 style="text-align:center">Choose your cause</h2></p>
        <div style="margin:auto">
            <table style="height: 354px; margin: auto;" width="735" cellpadding="4">
            <tbody>
            <tr style="height: 145.59375px;">
                <td style="width: 183.5px; text-align: center; height: 165.59375px;">&nbsp;<img style="width: 70%; height: 70%;" src="/img/dog-2.svg" alt="" /></td>
                <td style="width: 183.5px; text-align: center; height: 165.59375px;">&nbsp;<img style="width: 70%; height: 70%;" src="/img/teddy-bear.svg" alt="" /></td>
                <td style="width: 183.5px; text-align: center; height: 165.59375px;">&nbsp;<img style="width: 70%; height: 70%;" src="/img/couple.svg" alt="" /></td>
                <td style="width: 183.5px; text-align: center; height: 165.59375px;">&nbsp;<img style="width: 70%; height: 70%;" src="/img/football.svg" alt="" /></td>
            </tr>
            <tr style="height: 118px;">
            <td style="width: 183.5px; height: 118px; text-align: center; vertical-align: top;">&nbsp;
            <h4>Animal Care</h4>
            <p>This rewarding volunteer role would suit applicants that love animals and are committed to improving their welfare.</p>
            </td>
            <td style="width: 183.5px; height: 118px; text-align: center; vertical-align: top;">&nbsp;
            <h4>Child Care</h4>
            <p>&nbsp;</p>
            <p>People who volunteer with kids get to provide education, healthcare, and most importantly loving attention to these young souls.</p>
            </td>
            <td style="width: 183.5px; height: 118px; text-align: center; vertical-align: top;">&nbsp;
            <h4>Senior Citizens Care</h4>
            &nbsp;
            <p>Whether it&rsquo;s at a community center or a nursing home, there are many opportunities to spend time with seniors all across the country.</p>
            </td>
            <td style="width: 183.5px; height: 118px; text-align: center; vertical-align: top;">&nbsp;
            <h4>Sports</h4>
            <p>&nbsp;</p>
            <p>Lead after school clubs and leagues, physical education lessons, and community sports. Help young people have fun.</p>
            </td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>
</section>
<!-- DivTable.com -->
@endsection
