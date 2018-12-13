<form action="{{ route('pays.destroy', $pays) }}" method="POST" onsubmit="return confirm('Etes-vous sûre ?')">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <a type="submit"><i class="glyphicon glyphicon-trash"  style="color:red"></i>
                            </a>
                          </form>