<?php



/**
 * This class defines the structure of the 't_synthese_rapport_audit' table.
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
class CommonTSyntheseRapportAuditTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTSyntheseRapportAuditTableMap';

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
        $this->setName('t_synthese_rapport_audit');
        $this->setPhpName('CommonTSyntheseRapportAudit');
        $this->setClassname('CommonTSyntheseRapportAudit');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 20, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 50, '');
        $this->addColumn('fichier', 'Fichier', 'VARCHAR', true, 20, '');
        $this->addColumn('date', 'Date', 'VARCHAR', true, 20, '');
        $this->addColumn('horodatage', 'Horodatage', 'BLOB', true, null, null);
        $this->addColumn('untrusteddate', 'Untrusteddate', 'VARCHAR', true, 20, '');
        $this->addColumn('taille', 'Taille', 'INTEGER', true, 20, 0);
        $this->addColumn('annee', 'Annee', 'VARCHAR', true, 20, null);
        $this->addColumn('service_id', 'ServiceId', 'INTEGER', true, 20, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTSyntheseRapportAuditTableMap
