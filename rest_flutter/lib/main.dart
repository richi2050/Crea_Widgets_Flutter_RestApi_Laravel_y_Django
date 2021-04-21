import 'package:flutter/material.dart';
import 'package:rest_flutter/pages/chip_page.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      initialRoute: ChipPage.ROUTE,
      routes: {ChipPage.ROUTE: (BuildContext context) => ChipPage()},
    );
  }
}
