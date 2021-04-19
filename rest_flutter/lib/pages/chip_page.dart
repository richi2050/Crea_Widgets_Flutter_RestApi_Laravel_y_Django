import 'package:flutter/material.dart';

class ChipPage extends StatelessWidget {
  @override
  Widget build(BuildContext context){
    return Container(
      child: Chip(
        avatar: Icon(Icons.access_alarm),
        label: Text('Ricardo ')
      )
    );
  }
}