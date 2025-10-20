@extends('appsidebarfree')
@section('title', 'Отзывы')
@section('description', 'Отзывы')
@section('keywords', 'Отзывы')
@section('canonical', route('consultation.testimonials'))

@section('content')
<div class="main__reviews">
	<div class="reviews__header">
		<h1 class="reviews__title">Отзывы о консультациях</h1>
		<div class="reviews__stats">
		<div class="reviews__rating-overview">
			<div class="reviews__rating-score">@php echo '4.' . substr($allTestimonials->count(), 0, 1)@endphp</div>
			<div class="reviews__rating-stars">★★★★★</div>
			<div class="reviews__rating-count">{{ $allTestimonials->count() }} отзывов</div>
		</div>
		<div class="reviews__rating-bars">
			<div class="reviews__rating-bar">
				<div class="reviews__rating-label">5 звезд</div>
				<div class="reviews__rating-progress">
					<div class="reviews__rating-progress-fill reviews__rating-progress-fill--width-78"></div>
				</div>
				<div class="reviews__rating-percent">78%</div>
			</div>
			<div class="reviews__rating-bar">
				<div class="reviews__rating-label">4 звезды</div>
				<div class="reviews__rating-progress">
					<div class="reviews__rating-progress-fill reviews__rating-progress-fill--width-15"></div>
				</div>
				<div class="reviews__rating-percent">15%</div>
			</div>
			<div class="reviews__rating-bar">
				<div class="reviews__rating-label">3 звезды</div>
				<div class="reviews__rating-progress">
					<div class="reviews__rating-progress-fill reviews__rating-progress-fill--width-5"></div>
				</div>
				<div class="reviews__rating-percent">5%</div>
			</div>
			<div class="reviews__rating-bar">
				<div class="reviews__rating-label">2 звезды</div>
				<div class="reviews__rating-progress">
					<div class="reviews__rating-progress-fill reviews__rating-progress-fill--width-1"></div>
				</div>
				<div class="reviews__rating-percent">1%</div>
			</div>
			<div class="reviews__rating-bar">
				<div class="reviews__rating-label">1 звезда</div>
				<div class="reviews__rating-progress">
					<div class="reviews__rating-progress-fill reviews__rating-progress-fill--width-1"></div>
				</div>
				<div class="reviews__rating-percent">1%</div>
			</div>
		</div>
	</div>
</div>

<div class="reviews__filters">
	<select class="reviews__filter-select">
		<option>Все консультации</option>
	</select>
	<select class="reviews__filter-select">
		<option>Все рейтинги</option>
		<option>5 звезд</option>
		<option>4 звезды</option>
		<option>3 звезды</option>
		<option>2 звезды</option>
		<option>1 звезда</option>
	</select>
	<select class="reviews__filter-select">
		<option>Сначала новые</option>
		<option>Сначала старые</option>
		<option>Сначала полезные</option>
	</select>
</div>

<div class="reviews__list">
	@foreach ($testimonials as $testimonial)
	<div class="reviews__item">
		<div class="reviews__item-header">
			<a href="{{ route('profile.user.item', $testimonial->doctor->username)}}" class="reviews__reviewer-info">
				<img class="reviews__reviewer-avatar" src="https://puzkarapuz.ru/uploads/sfGuard/avatars/{{ $testimonial->doctor->avatar }}">
				<div class="reviews__reviewer-details">
					<div class="reviews__reviewer-name">{{ $testimonial->doctor->first_name }} {{ $testimonial->doctor->middle_name }}</div>
					<div class="reviews__review-specialisation">{{ $testimonial->doctor->icq }}</div>
				</div>
			</a>
			<div class="reviews__review-rating">★★★★★</div>
		</div>
		<div class="reviews__consultation-info">
			<div class="reviews__consultation-title"> </div>
			<div class="reviews__consultation-date">{{ $testimonial->description }}</div>
		</div>
		<div class="reviews__review-text">
			{{ $testimonial->consultation ? 'Консультация от ' . $testimonial->consultation->created_at .' '. $testimonial->consultation->title : '' }}
		</div>
		<div class="reviews__item-footer">
			<div class="reviews__user-info">
				<div class="reviews__user-name">{{ $testimonial->username }}, {{ $testimonial->created_at }}</div>
			</div>
			<div class="reviews__helpful-section">
				<button class="reviews__helpful-btn">👍 Полезно</button>
				<span class="reviews__helpful-count">24</span>
			</div>
		</div>
	</div>
	@endforeach
</div>
</div>
@endsection