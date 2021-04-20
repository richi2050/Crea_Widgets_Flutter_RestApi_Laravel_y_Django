import 'package:flutter/material.dart';

class ChipPage extends StatelessWidget {
  static const String ROUTE = '/chips';
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