from django.urls import path

from . import views

urlpatterns = [
     path("", views.ReviewView.as_view()),
     path("thank-you", views.ThankYouView.as_view()),
     path("reviews", views.ReviewsListView.as_view()),
     path("reviews/<int:pk>/", views.SingleReviewView.as_view(),name="review"),
     path("student", views.StudentFormView.as_view()),
     
     path("all_students", views.AllStudentsView.as_view()),
]
