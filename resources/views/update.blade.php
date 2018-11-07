



@foreach($updates as $update)

<a href="">
    <div class="update">
    <img class="profile_img" src="images/profile/jamie2.jpg">

    <div class="update_name"><strong>{{ $update->author_id }}</strong> {{ "@" . $update->author_id }}</div>

        <div class="update_content"><p>{{ $update->update_content }}</p>

        <!-- <div class="update_readmore">Read More</div> -->

            @if ($update->attachment_type == "image")

            <div style="background-image: url('{{ $update->image_urls }}" class="update_media"></div>

            @endif


                <div class="update_meta left">
                    <span class="update_reply"><i class="fas fa-reply fa-fw"></i> 34</span>
                    <span class="update_reply"><i class="far fa-heart fa-fw"></i> 43</span>
                    <span class="update_reply"><i class="far fa-clock fa-fw"></i>
                        {{ (new \App\Functions)->theTime($update->created_at->toDateTimeString()) }}
                    </span>
                </div>
                <div class="update_meta right">
                    <span class="update_boost">434 <i class="fas fa-rocket fa-fw"></i></span>
                </div>
        </div>
</div>
</a>

@endforeach