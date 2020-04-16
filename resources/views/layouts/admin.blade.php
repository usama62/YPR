<!doctype html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Yemeny Pharmaceutical Reference</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/normalize.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/fontawesome/fontawesome-all.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/prettyPhoto.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/chartist.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/chosen.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/color.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/transitions.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/dbresponsive.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/token-input.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/token-input-facebook.css')}}">
	<script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="{{ asset('assets/js/jquery.tokeninput.js')}}"></script>

	 <script type="text/javascript">
        $(document).ready(function() {
			var disease = [];
			var health = [];
            var _token = "{{ csrf_token() }}";
			var drugs = [];
		
			var all = [];
			var doctors = [];
			var drugs_list = [];
			var types = [];
			var types_drugs = [];
			var blogs = [];
			var type_health = [];
			var drugs_company = [];
			var drug_consumption = [];
			var changing = [];

			let globArr = [];
			let arr1 = $('#drugs_hidden').val();
			if(arr1 != null){
				var nameArr = arr1.split(',');
				for(i=0;i<nameArr.length;i++){
					globArr.push(
						{
							name: nameArr[i]
						}
					);
				}
			}
			

			let globArr2 = [];
			let arr2 = $('#literal_hidden').val();
			if(arr2 != null){
				var nameArr2 = arr2.split(',');
				for(i=0;i<nameArr2.length;i++){
					globArr2.push(
						{
							name: nameArr2[i]
						}
					);
				}
			}
			

			let globArr3 = [];
			let arr3 = $('#types_drug_hidden').val();
			if(arr3 != null){
				var nameArr3 = arr3.split(',');
				for(i=0;i<nameArr3.length;i++){
					globArr3.push(
						{
							name: nameArr3[i]
						}
					);
				}
			}

			let globArr4 = [];
			let arr4 = $('#specialized_docs_hidden').val();
			if(arr4 != null){
				var nameArr4 = arr4.split(',');
				for(i=0;i<nameArr4.length;i++){
					globArr4.push(
						{
							name: nameArr4[i]
						}
					);
				}
			}

			let globArr5 = [];
			let arr5 = $('#type_health_hidden').val();
			if(arr5 != null){
				var nameArr5 = arr5.split(',');
				for(i=0;i<nameArr5.length;i++){
					globArr5.push(
						{
							name: nameArr5[i]
						}
					);
				}
			}

			let globArr6 = [];
			let arr6 = $('#prohibited_drugs_hidden').val();
			if(arr6 != null){
				var nameArr6 = arr6.split(',');
				for(i=0;i<nameArr6.length;i++){
					globArr6.push(
						{
							name: nameArr6[i]
						}
					);
				}
			}

			let globArr7 = [];
			let arr7 = $('#related_drugs_hidden').val();
			if(arr7 != null){
				var nameArr7 = arr7.split(',');
				for(i=0;i<nameArr7.length;i++){
					globArr7.push(
						{
							name: nameArr7[i]
						}
					);
				}
			}

			let globArr8 = [];
			let arr8 = $('#type_disease_hidden').val();
			if(arr8 != null){
				var nameArr8 = arr8.split(',');
				for(i=0;i<nameArr8.length;i++){
					globArr8.push(
						{
							name: nameArr8[i]
						}
					);
				}
			}

			let globArr9 = [];
			let arr9 = $('#article_hidden').val();
			if(arr9 != null){
				var nameArr9 = arr9.split(',');
				for(i=0;i<nameArr9.length;i++){
					globArr9.push(
						{
							name: nameArr9[i]
						}
					);
				}
			}

			let globArr10 = [];
			let arr10 = $('#drugs_company_hidden').val();
			if(arr10 != null){
				var nameArr10 = arr10.split(',');
				for(i=0;i<nameArr10.length;i++){
					globArr10.push(
						{
							name: nameArr10[i]
						}
					);
				}
			}

			let globArr11 = [];
			let arr11 = $('#drug_consumption_hidden').val();
			if(arr11 != null){
				var nameArr11 = arr11.split(',');
				for(i=0;i<nameArr11.length;i++){
					globArr11.push(
						{
							name: nameArr11[i]
						}
					);
				}
			}

			$.ajax({ 
                url: "{{ route('getcategories') }}",
                data: {_token : _token},
                type: 'post',
                success: function(response)
                {
					for(i=0;i<response.disease.length;i++){
						disease.push(response.disease[i])
					}

					for(i=0;i<response.drugs.length;i++){
						drugs.push(response.drugs[i])
					}

					for(i=0;i<response.health.length;i++){
						health.push(response.health[i])
					}

					for(i=0;i<response.doctors.length;i++){
						doctors.push(response.doctors[i])
					}

					for(i=0;i<response.drugs_list.length;i++){
						drugs_list.push(response.drugs_list[i])
					}

					for(i=0;i<response.types.length;i++){
						types.push(response.types[i])
					}

					for(i=0;i<response.types_drugs.length;i++){
						types_drugs.push(response.types_drugs[i])
					}

					for(i=0;i<response.all.length;i++){
						all.push(response.all[i])
					}

					for(i=0;i<response.type_health.length;i++){
						type_health.push(response.type_health[i])
					}

					for(i=0;i<response.drugs_company.length;i++){
						drugs_company.push(response.drugs_company[i])
					}

					for(i=0;i<response.drug_consumption.length;i++){
						drug_consumption.push(response.drug_consumption[i])
					}
					 
					$("#diseasecategories").tokenInput(
						disease,
						{
							prePopulate: globArr
						}
					);

					$("#drugscategories").tokenInput(
						drugs,
						{
							prePopulate: globArr
						}
					);

					$("#healthcategories").tokenInput(
						health,
						{
							prePopulate: globArr
						}
					);

					$("#specialized_docs").tokenInput(
						doctors,
						{
							prePopulate: globArr4
						}
					);

					$("#drugs1").tokenInput(
						drugs_list,
						{
							prePopulate: globArr6
						}
					);

					$("#drugs2").tokenInput(
						drugs_list,
						{
							prePopulate: globArr7
						}
					);

					$("#type_disease").tokenInput(
						types,
						{
							prePopulate: globArr8
						}
					);

					$("#types_drugs").tokenInput(
						types_drugs,
						{
							prePopulate: globArr3
						}

					);

					$("#blogcategories1").tokenInput(
						drugs,
						{
							prePopulate: globArr9
						}
					);

					$("#blogcategories2").tokenInput(
						disease,
						{
							prePopulate: globArr9
						}
					);

					$("#blogcategories3").tokenInput(
						health,
						{
							prePopulate: globArr9
						}
					);

					$("#healthrelatedblogs").tokenInput(
						blogs
					);
					$("#type_health").tokenInput(
						type_health,
						{
							prePopulate: globArr5
						}
					);
					$("#drugs_company").tokenInput(
						drugs_company,
						{
							prePopulate: globArr10
						}
					);

					$("#drug_consumption").tokenInput(
						drug_consumption,
						{
							prePopulate: globArr11
						}
					);
					
					
					$("#literal_group").tokenInput([
						{name:"A"},
						{name:"B"},
						{name:"C"},
						{name:"D"},
						{name:"E"},
						{name:"F"},
						{name:"G"},
						{name:"H"},
						{name:"I"},
						{name:"J"},
						{name:"K"},
						{name:"L"},
						{name:"M"},
						{name:"N"},
						{name:"O"},
						{name:"P"},
						{name:"Q"},
						{name:"R"},
						{name:"S"},
						{name:"T"},
						{name:"U"},
						{name:"V"},
						{name:"W"},
						{name:"X"},
						{name:"Y"},
						{name:"Z"},
						{name:"0"},
						{name:"1"},
						{name:"2"},
						{name:"3"},
						{name:"4"},
						{name:"5"},
						{name:"6"},
						{name:"7"},
						{name:"8"},
						{name:"9"},
					],
						{
							prePopulate: globArr2
						}
					
					);
				}
			});
		

			[].forEach.call(document.getElementsByClassName('tags-input'), function (el) {
		let hiddenInput = document.createElement('input'),
			mainInput = document.createElement('input'),
			tags = [];

		hiddenInput.setAttribute('type', 'hidden');
		hiddenInput.setAttribute('name', 'tags_input');
		// el.getAttribute('data-name')

		mainInput.setAttribute('type', 'text');
		mainInput.setAttribute('placeholder', 'Enter Tags');
		mainInput.classList.add('main-input');
		mainInput.addEventListener('input', function () {
			let enteredTags = mainInput.value.split(' ');
			if (enteredTags.length > 1) {
				enteredTags.forEach(function (t) {
					let filteredTag = filterTag(t);
					if (filteredTag.length > 0)
						addTag(filteredTag);
				});
				mainInput.value = '';
			}
		});

		mainInput.addEventListener('keydown', function (e) {
			let keyCode = e.which || e.keyCode;
			if (keyCode === 8 && mainInput.value.length === 0 && tags.length > 0) {
				removeTag(tags.length - 1);
			}
		});

		el.appendChild(mainInput);
		el.appendChild(hiddenInput);

		// addTag('hello!');

		function addTag (text) {
			let tag = {
				text: text,
				element: document.createElement('span'),
			};

			tag.element.classList.add('tag');
			tag.element.textContent = tag.text;

			let closeBtn = document.createElement('span');
			closeBtn.classList.add('close');
			closeBtn.addEventListener('click', function () {
				removeTag(tags.indexOf(tag));
			});
			tag.element.appendChild(closeBtn);

			tags.push(tag);

			el.insertBefore(tag.element, mainInput);

			refreshTags();
		}

		function removeTag (index) {
			let tag = tags[index];
			tags.splice(index, 1);
			el.removeChild(tag.element);
			refreshTags();
		}

		function refreshTags () {
			let tagsList = [];
			tags.forEach(function (t) {
				tagsList.push(t.text);
			});
			hiddenInput.value = tagsList.join(',');
		}

		function filterTag (tag) {
			return tag.replace(/[^\w -]/g, '').trim().replace(/\W+/g, '-');
		}
		});

        });
		</script>
	<script src="{{ asset('assets/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
  <script>
  	tinymce.init({
		selector:'textarea',
		branding: false,
		entity_decoding:'raw',
		cleanup: true,
		menubar: false,
		plugins: "code",
  		toolbar: " undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify code",
		// setup: (editor) => {
		// 	editor.execCommand('mceCodeEditor');
		// }
	});
	  </script>
</head>
<body class="jf-userlogin">
	<div class="preloader-outer">
		<div class='loader'></div>
	</div>
	<div id="jf-wrapper" class="jf-wrapper">
		<header id="jf-dashboardheader" class="jf-dashboardheader jf-haslayout">
			<div class="jf-rightarea">
				<ul class="jf-langnotification">
					<li>
						<a class="jf-notification" href="">
							<span class="jf-notificationtag">04</span>
							<i class="lnr lnr-earth"></i>
						</a>
						<ul class="jf-dropdownmenu">
							<li><p>Consectetur adipisicing elit, sed domod tempor incididunt <em>- June 27, 2019</em></p></li>
							<li><p>Consectetur adipisicing elit, sed domod tempor incididunt</p></li>
							<li><p>Consectetur adipisicing elit, sed domod tempor incididunt</p></li>
							<li><p>Consectetur adipisicing elit, sed domod tempor incididunt</p></li>
							<li><p>Consectetur adipisicing elit, sed domod tempor incididunt</p></li>
							<li><p>Consectetur adipisicing elit, sed domod tempor incididunt</p></li>
						</ul>
					</li>
				</ul>
				<div class="jf-userlogedin">
					<figure class="jf-userimg">
						@if(auth::user()->profile_image != null)
							<img src="{{ asset(auth::user()->profile_image)}}" alt="image description">
						@else
							<img src="{{ asset('assets/images/default-user-profile-image.png')}}" alt="image description">
						@endif
					</figure>
					<div class="jf-username">
						<h3>{{ auth::user()->name }}</h3>
						<span>Sr. Creative Designer</span>
					</div>
					<nav class="jf-usernav">
						<ul>
							<li><a href="{{ url('/profile') }}"><i class="ti-briefcase"></i><span>My Profile</span></a></li>						
							<li><a href="{{ url('/update-password') }}"><i class="ti-key"></i><span>Change Password</span></a></li>						
							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									<i class="ti-shift-right"></i>
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="jf-sidebarwrapper" class="jf-sidebarwrapper">
				<a id="jf-btnmenutoggle" href="" class="jf-btnmenutoggle"><i class="lnr lnr-menu"></i></a>
				<div class="jf-verticalscrollbar">
					<div class="jf-logoarea">
						<a class="jf-logoicon" href=""><img src="{{ asset('assets/images/logo-icon.png')}}" alt="imagedescription" class="mCS_img_loaded"></a>
						<strong class="jf-logo"><a href=""><img src="{{ asset('assets/images/logo.png')}}" alt="image description" class="mCS_img_loaded"></a></strong>
					</div>
					<nav id="jf-dashboardnav" class="jf-dashboardnav">
						<ul>
							@if(Auth::User()->role == 1)
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="fa fa-user"></i><span>Users</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create-users') }}"><span>Create</span></a></li>
									<li><a href="{{ url('/manage-users ') }}"><span>Manage</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="fa fa-medkit"></i><span>Doctors</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create-doctor') }}"><span>Create</span></a></li>
									<li><a href="{{ url('/doctor ') }}"><span>Manage</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="fa fa-building"></i><span>Company</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create-company') }}"><span>Create</span></a></li>
									<li><a href="{{ url('/company ') }}"><span>Manage</span></a></li>
								</ul>
							</li>
							@endif
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="fa fa-plus-square"></i><span>Drugs</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create/drugs') }}"><span>Create</span></a></li>
									<li><a href="{{ url('/drugs') }}"><span>Manage</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="fa fa-plus-square"></i><span>Drugs Brand</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create/drugs-brands') }}"><span>Create</span></a></li>
									<li><a href="{{ url('drugs-brands') }}"><span>Manage</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="fa fa-heartbeat"></i><span>Health</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create/health') }}"><span>Create</span></a></li>
									<li><a href="{{ url('/health') }}"><span>Manage</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="	fa fa-stethoscope"></i><span>Disease</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create/disease') }}"><span>Create</span></a></li>
									<li><a href="{{ url('/disease') }}"><span>Manage</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="fa fa-image"></i><span>Photos</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/upload-photos') }}"><span>Upload Photos</span></a></li>
									<li><a href="{{ url('/photos') }}"><span>Manage Photos</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="fa fa-youtube-play"></i><span>Videos</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/upload-videos') }}"><span>Upload Videos</span></a></li>
									<li><a href="{{ url('/videos') }}"><span>Manage Videos</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="fa fa-list-alt"></i><span>Categories</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create-category') }}"><span>Create Categories</span></a></li>
									<li><a href="{{ url('/category') }}"><span>Manage Categories</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="fab fa-blogger"></i><span>Blogs</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create-blog') }}"><span>Create Blog</span></a></li>
									<li><a href="{{ url('/blogs') }}"><span>Manage Blogs</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="fab fa-blogger"></i><span>CMS</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/pages-listing') }}"><span>All Pages</span></a></li>
									<!-- <li><a href="{{ url('/blogs') }}"><span>Menus</span></a></li> -->
									<li><a href="{{ url('/settings') }}"><span>Settings</span></a></li>
								</ul>
							</li>
							<li class="jf-myresumenoti jf-notificationicon">
								<a href="{{ url('/saved-posts') }}">
									<i class="fa fa-save"></i>
									<span>Saved Items</span>
								</a>
							</li>						
						</ul>
					</nav>
					<div id="weather"></div>
				</div>
			</div>
		</header>
		
        @yield('content')
		<footer id="jf-footer" class="jf-footer jf-haslayout">
			<nav class="jf-addnav">
				<ul>
					<li><a href="">Listing Policy</a></li>
					<li><a href="">Terms of Use</a></li>
					<li><a href="">Privacy Policy</a></li>
				</ul>
			</nav>
			<p class="jf-copyrights">Copyright © 2019 <span>Job Forest.</span> All Rights Reserved.</p>
		</footer>
		
	</div>

	<script>   
        $(".wish_list").click(function(){
            var item_id = $(this).data('item');
            var _token = $("input[name=_token]").val();
            // console.log(item_id);
            $.ajax({ 
                url: "{{ route('saved') }}",
                data: {item_id : item_id, _token : _token},
                type: 'post',
                success: function(response)
                {
                    // console.log(response);
                    if(response > 0){
                        $('#wish_list_icon_'+response).removeClass('lnr lnr-heart');
                        $('#wish_list_icon_'+response).addClass('fa fa-heart-o');
                        $('#wish_list_text_'+response).text('saved');
                    }
                }
            });
        });    
   </script>
	<!-- <script src="{{ asset('assets/js/vendor/jquery-3.3.1.js') }}"></script> -->
	<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.basictable.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sortable.js') }}"></script>
	<script src="{{ asset('assets/js/countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.collapse.js') }}"></script>
	<script src="{{ asset('assets/js/circle-progress.js') }}"></script>
	<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
	<script src="{{ asset('assets/js/scrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.js') }}"></script>
	<script src="{{ asset('assets/js/prettyPhoto.js') }}"></script>
	<script src="{{ asset('assets/js/chartist.js') }}"></script>
	<script src="{{ asset('assets/js/appear.js') }}"></script>
	<script src="{{ asset('assets/js/gmap3.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script>
		new Chartist.Line('#jf-viewchart', {
			labels: ['Week 01', 'Week 02', 'Week 03', 'Week 04', 'Week 05'],
			series: [
				[0, 100, 200, 300, 400, 500, 600, 700],
				]
			}, {
			fullWidth: true,
			chartPadding: {
			right: 40
			}
		});
	</script>
	<script>
	$(document).ready(function(){
		document.getElementById("user-btn").disabled = true;
		$('#user-btn').addClass('grey');
        $('#jf-postjob1').click(function(){
            if($(this).prop("checked") == true){
                document.getElementById("user-btn").disabled = false;
				$('#user-btn').removeClass('grey');
            }
            else if($(this).prop("checked") == false){
                document.getElementById("user-btn").disabled = true;
				$('#user-btn').addClass('grey');
            }
        });
    });
	 </script>
</body>

</html>