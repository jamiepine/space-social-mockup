@extends('app')

@section('content')
<div id="content">


<div class="left_feed">




    <div class="feed_profile profile_small_container">
        <div class="profile_header">
        <img id="avatar" src="images/profile/jamie2.jpg">
            <div class="profile_info">
                    <div id="profile_name">Jamie Pine <i style="color:#57d0de;" class="fas fa-check-circle fa-fw fa-sm"></i></div>
                    <div id="profile_username">@jamie</div>         
            </div>
        </div>
    </div>



    <div class="feed_column_inner trending_feed">
        <h4>Trending</h4>
        <div class="trend hot">
                        <p class="trend_info trend_amount">123k</p>
            <h4 class="trend_title"><i class="fas fa-fire fa-fw"></i> Space </h4>
            <p class="trend_info">Space aquires Google Inc.</p>

        </div>
         <div class="trend">
                                    <p class="trend_info trend_amount">26k</p>
            <h4 class="trend_title"><i class="fas fa-fire fa-fw"></i> Logan Paul</h4>
            <!-- <div style="background: url(images/trends/lo.jpg);" class="trend_media"></div> -->
            <p class="trend_info">Jamie Pine is the best Jeff</p>

        </div>
         <div class="trend">
            <p class="trend_info trend_amount">3k</p>
            <h4 class="trend_title"> #Cheeseburger</h4>   
        </div>
         <div class="trend">
            <p class="trend_info trend_amount">103 </p>
            <h4 class="trend_title"> Jamie Pine</h4>
        </div>
        <div class="trend">
            <p class="trend_info trend_amount">132 </p>
            <h4 class="trend_title"> Phillip DeFranco</h4>
        </div>
        <div class="trend">
            <p class="trend_info trend_amount">341 </p>
            <h4 class="trend_title"> #MyNameJeff</h4>
        </div>
    </div>


{{--          <div class="feed_column_inner">
        <h4>Who To Follow</h4>

    <div class="profile_small_container">
       <div class="profile_header">
        <img id="avatar" src="images/people/1.jpg">
            <div class="profile_info">
                    <div id="profile_name">Pacifist Duck </div>
                    <div id="profile_username">@pacifist</div>         
            </div><!-- .profile_info -->
        </div><!-- .profile_header -->
    </div><!-- .profile_small_container -->


</div> --}}


    <div class="voice_feed">

        <div class="feed_voice">
            <div class="feed_voice_avatars feed_module">
                <img class="profile_img" src="images/people/3.jpg">
                <img class="profile_img" src="images/people/4.jpg">
                <img class="profile_img" src="images/people/5.jpg">
            </div>    
            <div class="feed_voice_icon feed_module"><i class="fas fa-volume-up fa-fw"></i></div>
            <div class="feed_voice_name feed_module"> #NetNutrality</div>
            <span class="voiceMeta voiceNumber"><i class="fas fa-headphones fa-fw"></i> 654</span>

            <div class="voiceMetaContainer feed_module">
                <span class="voiceMeta voiceDuration"><i class="fas fa-clock fa-fw"></i> 03:53:03</span>
                <span class="voiceMeta voiceLimit"> 5/10</span>
            </div>
        </div>

        <div class="feed_voice">
            <div class="feed_voice_avatars feed_module">
                <img class="profile_img" src="images/people/1.jpg">
                <img class="profile_img" src="images/people/2.jpg">
                <img class="profile_img" src="images/people/3.jpg">
            </div>    
            <div class="feed_voice_icon feed_module"><i class="fas fa-volume-up fa-fw"></i></div>
            <div class="feed_voice_name feed_module"> Logan Paul</div>
            <span class="voiceMeta voiceNumber"><i class="fas fa-headphones fa-fw"></i> 12</span>
            <span class="voiceMeta voiceNumber voiceFriendNumber"><i class="fas fa-user fa-fw"></i> 2</span>

            <div class="voiceMetaContainer feed_module">
                <span class="voiceMeta voiceDuration"><i class="fas fa-clock fa-fw"></i> 03:53:03</span>
                <span class="voiceMeta voiceLimit"> 9/10</span>
            </div>
        </div>

        <div class="feed_voice">
            <div class="feed_voice_avatars feed_module">
                <img class="profile_img" src="images/people/5.jpg">
                <img class="profile_img" src="images/people/6.jpg">
                <img class="profile_img" src="images/people/9.jpg">
            </div>    
            <div class="feed_voice_icon feed_module"><i class="fas fa-volume-up fa-fw"></i></div>
            <div class="feed_voice_name feed_module"> Name, Jeff</div>
            <span class="voiceMeta voiceNumber"><i class="fas fa-headphones fa-fw"></i> 2</span>

            <div class="voiceMetaContainer feed_module">
                <span class="voiceMeta voiceDuration"><i class="fas fa-clock fa-fw"></i> 03:53:03</span>
                <span class="voiceMeta voiceLimit"> 2/10</span>
            </div>
        </div>

        <div class="feed_voice">
            <div class="feed_voice_avatars feed_module">
                <img class="profile_img" src="images/people/3.jpg">
                <img class="profile_img" src="images/people/9.jpg">
                <img class="profile_img" src="images/people/10.jpg">
            </div>    
            <div class="feed_voice_icon feed_module"><i class="fas fa-volume-up fa-fw"></i></div>
            <div class="feed_voice_name feed_module"> Hang out</div>
            <span class="voiceMeta voiceNumber"><i class="fas fa-headphones fa-fw"></i> 0</span>

            <div class="voiceMetaContainer feed_module">
                <span class="voiceMeta voiceDuration"><i class="fas fa-clock fa-fw"></i> 03:53:03</span>
                <span class="voiceMeta voiceLimit"> 5/10</span>
            </div>
        </div>
    </div>


</br>

    <a href="{{ url('/') }}/user/jamie" ajax-enable ajax-action="/user/jamie" ajax-action="load">{{ Auth::user()->email }}</a>

    <a href="{{ url('/logout') }}"> logout </a>

    @if (Auth::check())
        logged in
    @else
        logged out
    @endif      

</div>



    <div class="feed_column main_feed">


        <div class="feed_switcher">
       {{--      <h4 class="feed_left">Feed</h4>
            <div class="feed_right">
                
                <span class="feed_button active"><i class="fas fa-newspaper fa-fw"></i></span>
                <span class="feed_button"><i class="fas fa-bell fa-fw"></i></span>
                <span class="feed_button"><i class="fas fa-at fa-fw"></i></span>
                <span class="feed_button jeffisgay"><i class="fas fa-ellipsis-v fa-fw"></i></span>

            </div> --}}


            <form ajax-enable ajax-success="msg" ajax-action="/newUpdate" ajax-container="update_view" id="newUpdate">
                <input type="text" name="" id="update_content">
                <button type="submit" name="" id="update_submit">Share</button>
            </form>

        </div>
        
        <div data-simplebar class="widget updates">
            <div id="update_view" class="widget_inner">

            <?php 
            // specialUpdates();
            // DEMOrandomUpdatePicker(); 
            ?>


            {{-- ON LOAD GET 50 UPDATES --}}
            <script type="text/javascript">  
                $(document).ready(function() {
                var csrf = $('meta[name="csrf-token"]').attr('content');
                var ad = {
                    ajaxAction: "/getUpdates",
                    ajaxSuccessAction: "load",
                    _token: csrf,
                    ajaxContainer: "#update_view"
                }
                var id = "updates";
                ajaxPost(ad, id);
                });
            </script>


                <div style="padding-bottom: 200px;"></div>

           </div>
        </div><!-- #widget -->

    </div>





    <!-- <div class="feed_column_right"> -->

<div class="feed_column youtube_column ytleft">

    <div data-simplebar class="youtube_feed">

        <div class="boxed_list_heading">
        <h4>Today</h4>
        </div><!-- .profile_small_container -->
                                <div class="youtube_video"><div class="jeff">
                                    <img class="video_thumb" src="images/videos/1.jpg">
                                    <div class="video_meta_container">
                                        <div class="video_title">The Zoella Christmas Musical</div>
                                        <div class="video_meta">17K views &nbsp;&nbsp; 1 month ago</div>
                                    </div>
                                </div></div>
                                 <div class="youtube_video"><div class="jeff">
                                    <img class="video_thumb" src="images/videos/2.jpg">
                                    <div class="video_meta_container">
                                        <div class="video_title">The Zoella Christmas Musical</div>
                                        <div class="video_meta">17K views &nbsp;&nbsp; 1 month ago</div>
                                    </div>
                                </div></div>
                                 <div class="youtube_video"><div class="jeff">
                                    <img class="video_thumb" src="images/videos/3.jpg">
                                    <div class="video_meta_container">
                                        <div class="video_title">The Zoella Christmas Musical</div>
                                        <div class="video_meta">17K views &nbsp;&nbsp; 1 month ago</div>
                                    </div>
                                </div></div>
                                 <div class="youtube_video"><div class="jeff">
                                    <img class="video_thumb" src="images/videos/4.jpg">
                                    <div class="video_meta_container">
                                        <div class="video_title">The Zoella Christmas Musical</div>
                                        <div class="video_meta">17K views &nbsp;&nbsp; 1 month ago</div>
                                    </div>
                                </div></div>
        <div class="boxed_list_heading">
        <h4>Yesterday</h4>
        </div><!-- .profile_small_container -->
                                 <div class="youtube_video"><div class="jeff">
                                    <img class="video_thumb" src="images/videos/5.jpg">
                                    <div class="video_meta_container">
                                        <div class="video_title">The Zoella Christmas Musical</div>
                                        <div class="video_meta">17K views &nbsp;&nbsp; 1 month ago</div>
                                    </div>
                                </div></div>
                                 <div class="youtube_video"><div class="jeff">
                                    <img class="video_thumb" src="images/videos/1.jpg">
                                    <div class="video_meta_container">
                                        <div class="video_title">The Zoella Christmas Musical</div>
                                        <div class="video_meta">17K views &nbsp;&nbsp; 1 month ago</div>
                                    </div>
                                </div></div>
                                <div class="youtube_video"><div class="jeff">
                                    <img class="video_thumb" src="images/videos/4.jpg">
                                    <div class="video_meta_container">
                                        <div class="video_title">The Zoella Christmas Musical</div>
                                        <div class="video_meta">17K views &nbsp;&nbsp; 1 month ago</div>
                                    </div>
                                </div></div>
                                 <div class="youtube_video"><div class="jeff">
                                    <img class="video_thumb" src="images/videos/5.jpg">
                                    <div class="video_meta_container">
                                        <div class="video_title">The Zoella Christmas Musical</div>
                                        <div class="video_meta">17K views &nbsp;&nbsp; 1 month ago</div>
                                    </div>
                                </div></div>
                                 <div class="youtube_video"><div class="jeff">
                                    <img class="video_thumb" src="images/videos/1.jpg">
                                    <div class="video_meta_container">
                                        <div class="video_title">The Zoella Christmas Musical</div>
                                        <div class="video_meta">17K views &nbsp;&nbsp; 1 month ago</div>
                                    </div>
                                </div></div>
                                <div style="padding-bottom: 200px;"></div>

                        </div>
                </div>
        </div>

</div><!-- .feed_column -->



<div class="feed_column feed_column_four">

    <div class="profile_small_container">
       <div class="profile_header">
        <img id="avatar" src="images/profile/2.jpg">
            <div class="profile_info">
                    <div id="profile_name">Pacifist Duck </div>
                    <div id="profile_username">@pacifist</div>         
            </div><!-- .profile_info -->
        </div><!-- .profile_header -->
    </div><!-- .profile_small_container -->
        
</div><!-- .feed_column -->





</div><!-- #content -->

@endsection