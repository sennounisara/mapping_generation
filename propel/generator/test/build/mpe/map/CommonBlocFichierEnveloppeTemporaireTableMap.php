<?php



/**
 * This class defines the structure of the 'blocFichierEnveloppeTemporaire' table.
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
class CommonBlocFichierEnveloppeTemporaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonBlocFichierEnveloppeTemporaireTableMap';

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
        $this->setName('blocFichierEnveloppeTemporaire');
        $this->setPhpName('CommonBlocFichierEnveloppeTemporaire');
        $this->setClassname('CommonBlocFichierEnveloppeTemporaire');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('uid', 'Uid', 'VARCHAR', true, 50, '');
        $this->addColumn('type_env', 'TypeEnv', 'INTEGER', true, 1, 0);
        $this->addColumn('sous_pli', 'SousPli', 'INTEGER', true, 3, 0);
        $this->addColumn('type_fichier', 'TypeFichier', 'CHAR', true, 3, '');
        $this->addColumn('numero_ordre_fichier', 'NumeroOrdreFichier', 'INTEGER', true, 5, 0);
        $this->addColumn('numero_ordre_bloc', 'NumeroOrdreBloc', 'INTEGER', true, 5, 0);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonBlocFichierEnveloppeTemporaireTableMap
