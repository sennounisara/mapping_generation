<?php



/**
 * This class defines the structure of the 'seance' table.
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
class CommonSeanceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonSeanceTableMap';

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
        $this->setName('seance');
        $this->setPhpName('CommonSeance');
        $this->setClassname('CommonSeance');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('report', 'Report', 'CHAR', true, null, '0');
        $this->getColumn('report', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date', 'Date', 'TIMESTAMP', true, null, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 2, null);
        $this->addColumn('ouverture_env_candidature', 'OuvertureEnvCandidature', 'CHAR', true, null, '0');
        $this->getColumn('ouverture_env_candidature', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouverture_env_offre_technique', 'OuvertureEnvOffreTechnique', 'CHAR', true, null, '0');
        $this->getColumn('ouverture_env_offre_technique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ouverture_env_offre_financiere', 'OuvertureEnvOffreFinanciere', 'CHAR', true, null, '0');
        $this->getColumn('ouverture_env_offre_financiere', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('jugement_env1_administratif', 'JugementEnv1Administratif', 'CHAR', true, null, '0');
        $this->getColumn('jugement_env1_administratif', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('jugement_env1_technique', 'JugementEnv1Technique', 'CHAR', true, null, '0');
        $this->getColumn('jugement_env1_technique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('jugement_env1_echantillon', 'JugementEnv1Echantillon', 'CHAR', true, null, '0');
        $this->getColumn('jugement_env1_echantillon', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('jugement_offre_technique', 'JugementOffreTechnique', 'CHAR', true, null, '0');
        $this->getColumn('jugement_offre_technique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('jugement_offre_financiere', 'JugementOffreFinanciere', 'CHAR', true, null, '0');
        $this->getColumn('jugement_offre_financiere', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('justificatif', 'Justificatif', 'LONGVARCHAR', false, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, 1);
        $this->addColumn('id_blob_pv', 'IdBlobPv', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonSeanceTableMap
