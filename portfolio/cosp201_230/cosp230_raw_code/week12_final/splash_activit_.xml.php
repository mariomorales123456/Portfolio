<?xml version="1.0" encoding="utf-8"?>
<RelativeLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".splash_activity" >

    <TextView
        android:id="@+id/splash_title"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="50dp"
        android:text="@string/splash_title"
        android:textColor="#F44336"
        android:textSize="42sp"
        android:textStyle="bold" />

    <ImageView
        android:id="@+id/splash_image"
        android:layout_width="match_parent"
        android:layout_height="match_parent"
        android:layout_alignParentStart="true"
        android:layout_alignParentLeft="true"
        android:layout_alignParentTop="true"
        android:layout_marginStart="-3dp"
        android:layout_marginLeft="-3dp"
        android:layout_marginTop="-51dp"
        android:contentDescription="@string/splash_image"
        android:src="@drawable/background" />

    <TextView
        android:id="@+id/splash_subtitle"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_alignParentBottom="true"
        android:layout_centerHorizontal="true"
        android:layout_marginBottom="100dp"
        android:text="@string/splash_subtitle"
        android:textColor="#2196F3" />
</RelativeLayout>