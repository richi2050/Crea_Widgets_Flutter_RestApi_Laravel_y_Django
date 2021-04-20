import 'package:flutter/cupertino.dart';
import 'package:rest_flutter/pages/chip_page.dart';
import 'package:flutter/material.dart';

class _DrawerItem{
  String title;
  IconData icon;
  String route;
  _DrawerItem({this.title, this.icon, this.route});
}

class CustomDrawer {
  static final _optionsItems = [
    _DrawerItem(title: 'Chip', icon: Icons.list, route: ChipPage.ROUTE)
  ]
}