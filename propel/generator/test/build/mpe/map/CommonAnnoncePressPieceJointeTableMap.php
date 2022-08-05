<?php



/**
 * This class defines the structure of the 'Annonce_Press_PieceJointe' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonAnnoncePressPieceJointeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAnnoncePressPieceJointeTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('Annonce_Press_PieceJointe');
        $this->setPhpName('CommonAnnoncePressPieceJointe');
        $this->setClassname('CommonAnnoncePressPieceJointe');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addForeignKey('id_annonce_press', 'IdAnnoncePress', 'INTEGER', 'Annonce_Press', 'id', true, null, 0);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 100, '');
        $this->addColumn('piece', 'Piece', 'INTEGER', true, null, 0);
        $this->addColumn('horodatage', 'Horodatage', 'BLOB', true, null, null);
        $this->addColumn('untrusteddate', 'Untrusteddate', 'VARCHAR', true, 25, '');
        $this->addColumn('taille', 'Taille', 'VARCHAR', true, 25, '0');
        $this->addColumn('fichier_genere', 'FichierGenere', 'CHAR', true, null, '0');
        $this->getColumn('fichier_genere', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonAnnoncePress', 'CommonAnnoncePress', RelationMap::MANY_TO_ONE, array('id_annonce_press' => 'id', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonAnnoncePressPieceJointeTableMap
