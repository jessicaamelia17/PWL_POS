<?php

namespace App\DataTables;

use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Button;

class KategoriDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($row) {
                // Pastikan primary key yang benar, misalnya $row->id atau $row->kategori_id
                $editUrl   = route('kategori.edit', $row->kategori_id);
                $deleteUrl = route('kategori.destroy', $row->kategori_id);

                // Gunakan CSRF & method_field('DELETE') untuk form penghapusan
                $csrf   = csrf_field();
                $method = method_field('DELETE');

                // Tombol Edit
                $button = '<a href="'.$editUrl.'" class="btn btn-warning btn-sm">Edit</a> ';

                // Tombol Delete (inline form)
                $button .= '<form action="'.$deleteUrl.'" method="POST" style="display:inline-block;">'
                        . $csrf
                        . $method
                        . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus?\')">'
                        . 'Delete</button>'
                        . '</form>';

                return $button;
            })
            ->setRowId('kategori_id'); // Opsional
    }

    public function query(KategoriModel $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('kategori-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload'),
            ]);
    }

    protected function getColumns(): array
    {
        return [
            Column::make('kategori_id'),
            Column::make('kategori_kode'),
            Column::make('kategori_nama'),
            Column::make('created_at'),
            Column::make('updated_at'),
            // Kolom action
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(120)
                ->addClass('text-center'),
        ];
    }

    protected function filename(): string
    {
        return 'Kategori_' . date('YmdHis');
    }
}
