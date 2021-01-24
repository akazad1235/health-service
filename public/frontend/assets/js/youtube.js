var apiKey = 'AIzaSyAmN8dCsGtsiWpHBlFlOuFyQ9tWe6QHX0Q';
var channelId = 'UCCYhthmH3SmxqF3-c72IEtw';

$(document).ready(function () {

	function fetchVideo(pid) {
		$.get(
			"https://www.googleapis.com/youtube/v3/playlistItems", {
			part: 'snippet, contentDetails',
			maxResults: 50,
			playlistId: pid,
			key: apiKey
		},


			function (data) {
				

				$.each(data.items, function (i, item) {					
					var vid_id = item.snippet.resourceId.videoId;
					var vid_container = $('#youtubeVideo');
					var videoEle = `<div class="post-item">
					<iframe src="https://www.youtube.com/embed/${vid_id}" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>	`;
					vid_container.append(videoEle);
				});

			}
		);
	}



	fetchVideo('PLKbifpQxa1_P339fOm21mT9OTC3Ec8ncM')


});
