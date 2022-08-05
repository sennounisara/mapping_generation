<?php



/**
 * This class defines the structure of the 'Chorus_pj' table.
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
class CommonChorusPjTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonChorusPjTableMap';

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
        $this->setName('Chorus_pj');
        $this->setPhpName('CommonChorusPj');
        $this->setClassname('CommonChorusPj');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 20, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Chorus_echange', 'organisme', true, 30, '');
        $this->addForeignKey('id_echange', 'IdEchange', 'INTEGER', 'Chorus_echange', 'id', true, 20, 0);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 300, '');
        $this->addColumn('fichier', 'Fichier', 'VARCHAR', true, 20, '');
        $this->addColumn('horodatage', 'Horodatage', 'BLOB', true, null, null);
        $this->addColumn('untrusteddate', 'Untrusteddate', 'VARCHAR', true, 20, '');
        $this->addColumn('taille', 'Taille', 'INTEGER', true, 20, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonChorusEchange', 'CommonChorusEchange', RelationMap::MANY_TO_ONE, array('id_echange' => 'id', 'organisme' => 'organisme', ), null, null);
    } // buildRelations()

} // CommonChorusPjTableMap
