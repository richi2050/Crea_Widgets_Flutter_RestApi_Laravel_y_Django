import 'package:flutter/material.dart';
import 'package:rest_flutter/utils/custom_drawer.dart';

class ChipPage extends StatelessWidget {
  static const String ROUTE = '/chips';
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Chip Pages'),
      ),
      drawer: CustomDrawer.getDrawer(context),
      body: Chip(avatar: Icon(Icons.access_alarm), label: Text('Ricardo ')),
    );
  }
}
