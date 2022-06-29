<?xml version="1.0" encoding="utf-8"?>
<LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    android:orientation="vertical"
    tools:context=".gridview">

    <GridView
        android:id="@+id/gridView"
        android:layout_width="wrap_content"
        android:layout_height="346dp"
        android:columnWidth="160dp"
        android:horizontalSpacing="5dp"
        android:numColumns="2"
        android:verticalSpacing="5dp" />

    <ImageView
        android:id="@+id/imgLarge"
        android:layout_width="370dp"
        android:layout_height="400dp"
        android:layout_gravity="center_horizontal"
        android:layout_marginTop="-60dp"
        android:contentDescription="@string/gridview_image_des" />

</LinearLayout>