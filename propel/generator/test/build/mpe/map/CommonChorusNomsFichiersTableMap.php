<?php



/**
 * This class defines the structure of the 'chorus_noms_fichiers' table.
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
class CommonChorusNomsFichiersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonChorusNomsFichiersTableMap';

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
        $this->setName('chorus_noms_fichiers');
        $this->setPhpName('CommonChorusNomsFichiers');
        $this->setClassname('CommonChorusNomsFichiers');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_echange', 'IdEchange', 'INTEGER', true, null, null);
        $this->addPrimaryKey('nom_fichier', 'NomFichier', 'VARCHAR', true, 200, null);
        $this->addColumn('acronyme_organisme', 'AcronymeOrganisme', 'VARCHAR', true, 200, null);
        $this->addColumn('type_fichier', 'TypeFichier', 'CHAR', true, 3, 'FEN');
        $this->addColumn('date_ajout', 'DateAjout', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonChorusNomsFichiersTableMap
