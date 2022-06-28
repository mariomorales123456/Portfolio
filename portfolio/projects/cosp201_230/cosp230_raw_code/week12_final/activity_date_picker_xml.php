<?xml version="1.0" encoding="utf-8"?>
<RelativeLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".date_picker">


    <LinearLayout
        android:layout_width="fill_parent"
        android:layout_height="fill_parent"
        android:layout_alignParentStart="true"
        android:layout_alignParentLeft="true"
        android:layout_alignParentTop="true"
        android:layout_alignParentRight="true"
        android:layout_alignParentEnd="true"
        android:orientation="horizontal">

        <TableLayout
            android:layout_width="fill_parent"
            android:layout_height="wrap_content">
            <TableRow android:layout_width="wrap_content">
                <View android:layout_height="60dp"/>

                <TextView
                    android:id="@+id/date_picker_title"
                    android:layout_width="wrap_content"
                    android:gravity="center_horizontal"
                    android:padding="50dp"
                    android:text="@string/date_picker_title"
                    android:textColor="#F44336"
                    android:textSize="42sp"
                    android:typeface="serif" />
            </TableRow>
            <TableRow>
                <View android:layout_height="50dp"/>

                <Button
                    android:id="@+id/date_picker_button"
                    android:layout_width="wrap_content"
                    android:background="#BDBBBB"
                    android:gravity="center_horizontal"
                    android:padding="20dp"
                    android:text="@string/date_picker_button"
                    android:textSize="36sp" />
            </TableRow>
            <TableRow android:layout_width="wrap_content">
                <View android:layout_height="60dp"/>
                <TextView
                    android:id="@+id/date_picker_des"
                    android:layout_width="wrap_content"
                    android:layout_gravity="left"
                    android:padding="20dp"
                    android:text="@string/date_picker_des"
                    android:textSize="24sp"/>
            </TableRow>
            <TableRow>
                <View android:layout_height="60dp"/>

                <TextView
                    android:id="@+id/date_picker_result"
                    android:layout_width="wrap_content"
                    android:layout_height="wrap_content"
                    android:layout_gravity="center"
                    android:padding="20dp"
                    android:textColor="#F44336"
                    android:textSize="24sp" />
            </TableRow>
        </TableLayout>
    </LinearLayout>
</RelativeLayout>