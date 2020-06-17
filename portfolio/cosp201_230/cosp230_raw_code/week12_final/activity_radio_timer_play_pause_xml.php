<?xml version="1.0" encoding="utf-8"?>
<RelativeLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".radio_timer_play_pause">

    <TextView
        android:id="@+id/radio_timer_title"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="20dp"
        android:text="@string/radio_timer_title"
        android:textColor="#F44336"
        android:textSize="36sp"
        android:textStyle="bold" />

    <EditText
        android:id="@+id/radio_timer_income"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_below="@id/radio_timer_title"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="20dp"
        android:ems="10"
        android:gravity="center_horizontal"
        android:hint="@string/radio_timer_income_hint"
        android:inputType="number"
        android:textSize="30sp" />

    <EditText
        android:id="@+id/radio_timer_depen"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_below="@id/radio_timer_income"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="20dp"
        android:ems="10"
        android:gravity="center_horizontal"
        android:hint="@string/radio_timer_depen_hint"
        android:inputType="number"
        android:textSize="30sp" />

    <TextView
        android:id="@+id/radio_timer_radio_group_label"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_below="@id/radio_timer_depen"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="20dp"
        android:text="@string/radio_timer_radio_group_label"
        android:textSize="24sp" />

    <RadioGroup
        android:id="@+id/radio_timer_radio_group"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="20dp"
        android:layout_below="@id/radio_timer_radio_group_label">

        <RadioButton
            android:id="@+id/radio_timer_children"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:text="@string/radio_timer_children"
            android:textSize="24sp" />

        <RadioButton
            android:id="@+id/radio_timer_no_children"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:text="@string/radio_timer_no_children"
            android:textSize="24sp" />
    </RadioGroup>

    <Button
        android:id="@+id/radio_timer_btn_calculate_start"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="20dp"
        android:layout_below="@id/radio_timer_radio_group"
        android:text="@string/radio_timer_btn_calculate_start"
        android:textSize="30sp" />

    <Button
        android:id="@+id/radio_timer_btn_calculate_finish"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="10dp"
        android:layout_below="@id/radio_timer_radio_group"
        android:text="@string/radio_timer_btn_calculate_finish"
        android:textSize="30sp"
        android:visibility="invisible" />

    <TextView
        android:id="@+id/radio_timer_processing"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="20dp"
        android:layout_below="@id/radio_timer_radio_group"
        android:text="@string/radio_timer_processing"
        android:textSize="24sp"
        android:visibility="invisible" />

    <TextView
        android:id="@+id/radio_timer_result"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_below="@id/radio_timer_radio_group"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="20dp"
        android:textColor="#F44336"
        android:textSize="36sp" />

    <ImageView
        android:id="@+id/radio_timer_image"
        android:layout_width="300dp"
        android:layout_height="150dp"
        android:layout_alignParentBottom="true"
        android:layout_centerHorizontal="true"
        android:contentDescription="@string/radio_timer_image"
        app:srcCompat="@drawable/radio_timer_image" />

</RelativeLayout>