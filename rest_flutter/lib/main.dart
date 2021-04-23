import 'package:flutter/material.dart';
import 'package:rest_flutter/pages/chips_page.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      initialRoute: ChipsPage.ROUTE,
      routes: {ChipsPage.ROUTE: (BuildContext context) => ChipsPage()},
    );
  }
}
