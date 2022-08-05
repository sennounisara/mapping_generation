<?php



/**
 * This class defines the structure of the 'backup_Ordre_Du_Jour_2' table.
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
class CommonBackupOrdreDuJour2TableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonBackupOrdreDuJour2TableMap';

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
        $this->setName('backup_Ordre_Du_Jour_2');
        $this->setPhpName('CommonBackupOrdreDuJour2');
        $this->setClassname('CommonBackupOrdreDuJour2');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_seance', 'IdSeance', 'INTEGER', true, null, 0);
        $this->addColumn('ref_consultation', 'RefConsultation', 'VARCHAR', false, 255, null);
        $this->addColumn('ref_libre', 'RefLibre', 'VARCHAR', false, 50, null);
        $this->addColumn('id_etape', 'IdEtape', 'INTEGER', true, null, null);
        $this->addColumn('intitule_ordre_du_jour', 'IntituleOrdreDuJour', 'CLOB', false, null, null);
        $this->addColumn('lots_odj_libre', 'LotsOdjLibre', 'VARCHAR', false, 100, null);
        $this->addColumn('id_type_procedure', 'IdTypeProcedure', 'INTEGER', false, null, null);
        $this->addColumn('type_procedure_libre', 'TypeProcedureLibre', 'VARCHAR', false, 255, null);
        $this->addColumn('date_cloture', 'DateCloture', 'TIMESTAMP', false, null, null);
        $this->addColumn('type_env', 'TypeEnv', 'INTEGER', false, 1, null);
        $this->addColumn('sous_pli', 'SousPli', 'INTEGER', false, 2, null);
        $this->addColumn('heure', 'Heure', 'VARCHAR', true, 5, '00');
        $this->addColumn('etape_consultation', 'EtapeConsultation', 'VARCHAR', true, 200, '');
        $this->addColumn('type_consultation', 'TypeConsultation', 'VARCHAR', true, 200, '');
        $this->addColumn('minutes', 'Minutes', 'CHAR', true, 2, '');
        $this->addColumn('service', 'Service', 'VARCHAR', false, 255, null);
        $this->addColumn('id_service', 'IdService', 'INTEGER', false, 10, null);
        $this->addColumn('date_debut', 'DateDebut', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonBackupOrdreDuJour2TableMap
