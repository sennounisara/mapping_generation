<?php


/**
 * Base class that represents a query for the 't_edition_formulaire' table.
 *
 * 
 *
 * @method CommonTEditionFormulaireQuery orderByIdEditionFormulaire($order = Criteria::ASC) Order by the id_edition_formulaire column
 * @method CommonTEditionFormulaireQuery orderByIdDossierFormulaire($order = Criteria::ASC) Order by the id_dossier_formulaire column
 * @method CommonTEditionFormulaireQuery orderByCleExterneEdition($order = Criteria::ASC) Order by the cle_externe_edition column
 * @method CommonTEditionFormulaireQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonTEditionFormulaireQuery orderByExtension($order = Criteria::ASC) Order by the extension column
 * @method CommonTEditionFormulaireQuery orderByPath($order = Criteria::ASC) Order by the path column
 * @method CommonTEditionFormulaireQuery orderByHash($order = Criteria::ASC) Order by the hash column
 * @method CommonTEditionFormulaireQuery orderBySignature($order = Criteria::ASC) Order by the signature column
 * @method CommonTEditionFormulaireQuery orderByDateGeneration($order = Criteria::ASC) Order by the date_generation column
 * @method CommonTEditionFormulaireQuery orderByDateDepot($order = Criteria::ASC) Order by the date_depot column
 * @method CommonTEditionFormulaireQuery orderByStatutGeneration($order = Criteria::ASC) Order by the statut_generation column
 * @method CommonTEditionFormulaireQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonTEditionFormulaireQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 *
 * @method CommonTEditionFormulaireQuery groupByIdEditionFormulaire() Group by the id_edition_formulaire column
 * @method CommonTEditionFormulaireQuery groupByIdDossierFormulaire() Group by the id_dossier_formulaire column
 * @method CommonTEditionFormulaireQuery groupByCleExterneEdition() Group by the cle_externe_edition column
 * @method CommonTEditionFormulaireQuery groupByLibelle() Group by the libelle column
 * @method CommonTEditionFormulaireQuery groupByExtension() Group by the extension column
 * @method CommonTEditionFormulaireQuery groupByPath() Group by the path column
 * @method CommonTEditionFormulaireQuery groupByHash() Group by the hash column
 * @method CommonTEditionFormulaireQuery groupBySignature() Group by the signature column
 * @method CommonTEditionFormulaireQuery groupByDateGeneration() Group by the date_generation column
 * @method CommonTEditionFormulaireQuery groupByDateDepot() Group by the date_depot column
 * @method CommonTEditionFormulaireQuery groupByStatutGeneration() Group by the statut_generation column
 * @method CommonTEditionFormulaireQuery groupByType() Group by the type column
 * @method CommonTEditionFormulaireQuery groupByNomFichier() Group by the nom_fichier column
 *
 * @method CommonTEditionFormulaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTEditionFormulaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTEditionFormulaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTEditionFormulaireQuery leftJoinCommonTDossierFormulaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTDossierFormulaire relation
 * @method CommonTEditionFormulaireQuery rightJoinCommonTDossierFormulaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTDossierFormulaire relation
 * @method CommonTEditionFormulaireQuery innerJoinCommonTDossierFormulaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTDossierFormulaire relation
 *
 * @method CommonTEditionFormulaire findOne(PropelPDO $con = null) Return the first CommonTEditionFormulaire matching the query
 * @method CommonTEditionFormulaire findOneOrCreate(PropelPDO $con = null) Return the first CommonTEditionFormulaire matching the query, or a new CommonTEditionFormulaire object populated from the query conditions when no match is found
 *
 * @method CommonTEditionFormulaire findOneByIdDossierFormulaire(int $id_dossier_formulaire) Return the first CommonTEditionFormulaire filtered by the id_dossier_formulaire column
 * @method CommonTEditionFormulaire findOneByCleExterneEdition(int $cle_externe_edition) Return the first CommonTEditionFormulaire filtered by the cle_externe_edition column
 * @method CommonTEditionFormulaire findOneByLibelle(string $libelle) Return the first CommonTEditionFormulaire filtered by the libelle column
 * @method CommonTEditionFormulaire findOneByExtension(string $extension) Return the first CommonTEditionFormulaire filtered by the extension column
 * @method CommonTEditionFormulaire findOneByPath(string $path) Return the first CommonTEditionFormulaire filtered by the path column
 * @method CommonTEditionFormulaire findOneByHash(string $hash) Return the first CommonTEditionFormulaire filtered by the hash column
 * @method CommonTEditionFormulaire findOneBySignature(string $signature) Return the first CommonTEditionFormulaire filtered by the signature column
 * @method CommonTEditionFormulaire findOneByDateGeneration(string $date_generation) Return the first CommonTEditionFormulaire filtered by the date_generation column
 * @method CommonTEditionFormulaire findOneByDateDepot(string $date_depot) Return the first CommonTEditionFormulaire filtered by the date_depot column
 * @method CommonTEditionFormulaire findOneByStatutGeneration(int $statut_generation) Return the first CommonTEditionFormulaire filtered by the statut_generation column
 * @method CommonTEditionFormulaire findOneByType(int $type) Return the first CommonTEditionFormulaire filtered by the type column
 * @method CommonTEditionFormulaire findOneByNomFichier(string $nom_fichier) Return the first CommonTEditionFormulaire filtered by the nom_fichier column
 *
 * @method array findByIdEditionFormulaire(int $id_edition_formulaire) Return CommonTEditionFormulaire objects filtered by the id_edition_formulaire column
 * @method array findByIdDossierFormulaire(int $id_dossier_formulaire) Return CommonTEditionFormulaire objects filtered by the id_dossier_formulaire column
 * @method array findByCleExterneEdition(int $cle_externe_edition) Return CommonTEditionFormulaire objects filtered by the cle_externe_edition column
 * @method array findByLibelle(string $libelle) Return CommonTEditionFormulaire objects filtered by the libelle column
 * @method array findByExtension(string $extension) Return CommonTEditionFormulaire objects filtered by the extension column
 * @method array findByPath(string $path) Return CommonTEditionFormulaire objects filtered by the path column
 * @method array findByHash(string $hash) Return CommonTEditionFormulaire objects filtered by the hash column
 * @method array findBySignature(string $signature) Return CommonTEditionFormulaire objects filtered by the signature column
 * @method array findByDateGeneration(string $date_generation) Return CommonTEditionFormulaire objects filtered by the date_generation column
 * @method array findByDateDepot(string $date_depot) Return CommonTEditionFormulaire objects filtered by the date_depot column
 * @method array findByStatutGeneration(int $statut_generation) Return CommonTEditionFormulaire objects filtered by the statut_generation column
 * @method array findByType(int $type) Return CommonTEditionFormulaire objects filtered by the type column
 * @method array findByNomFichier(string $nom_fichier) Return CommonTEditionFormulaire objects filtered by the nom_fichier column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTEditionFormulaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTEditionFormulaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTEditionFormulaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTEditionFormulaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTEditionFormulaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTEditionFormulaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTEditionFormulaireQuery) {
            return $criteria;
        }
        $query = new CommonTEditionFormulaireQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTEditionFormulaire|CommonTEditionFormulaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTEditionFormulairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTEditionFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTEditionFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdEditionFormulaire($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTEditionFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_edition_formulaire`, `id_dossier_formulaire`, `cle_externe_edition`, `libelle`, `extension`, `path`, `hash`, `signature`, `date_generation`, `date_depot`, `statut_generation`, `type`, `nom_fichier` FROM `t_edition_formulaire` WHERE `id_edition_formulaire` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTEditionFormulaire();
            $obj->hydrate($row);
            CommonTEditionFormulairePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonTEditionFormulaire|CommonTEditionFormulaire[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonTEditionFormulaire[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTEditionFormulairePeer::ID_EDITION_FORMULAIRE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTEditionFormulairePeer::ID_EDITION_FORMULAIRE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_edition_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEditionFormulaire(1234); // WHERE id_edition_formulaire = 1234
     * $query->filterByIdEditionFormulaire(array(12, 34)); // WHERE id_edition_formulaire IN (12, 34)
     * $query->filterByIdEditionFormulaire(array('min' => 12)); // WHERE id_edition_formulaire >= 12
     * $query->filterByIdEditionFormulaire(array('max' => 12)); // WHERE id_edition_formulaire <= 12
     * </code>
     *
     * @param     mixed $idEditionFormulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdEditionFormulaire($idEditionFormulaire = null, $comparison = null)
    {
        if (is_array($idEditionFormulaire)) {
            $useMinMax = false;
            if (isset($idEditionFormulaire['min'])) {
                $this->addUsingAlias(CommonTEditionFormulairePeer::ID_EDITION_FORMULAIRE, $idEditionFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEditionFormulaire['max'])) {
                $this->addUsingAlias(CommonTEditionFormulairePeer::ID_EDITION_FORMULAIRE, $idEditionFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::ID_EDITION_FORMULAIRE, $idEditionFormulaire, $comparison);
    }

    /**
     * Filter the query on the id_dossier_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDossierFormulaire(1234); // WHERE id_dossier_formulaire = 1234
     * $query->filterByIdDossierFormulaire(array(12, 34)); // WHERE id_dossier_formulaire IN (12, 34)
     * $query->filterByIdDossierFormulaire(array('min' => 12)); // WHERE id_dossier_formulaire >= 12
     * $query->filterByIdDossierFormulaire(array('max' => 12)); // WHERE id_dossier_formulaire <= 12
     * </code>
     *
     * @see       filterByCommonTDossierFormulaire()
     *
     * @param     mixed $idDossierFormulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdDossierFormulaire($idDossierFormulaire = null, $comparison = null)
    {
        if (is_array($idDossierFormulaire)) {
            $useMinMax = false;
            if (isset($idDossierFormulaire['min'])) {
                $this->addUsingAlias(CommonTEditionFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDossierFormulaire['max'])) {
                $this->addUsingAlias(CommonTEditionFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire, $comparison);
    }

    /**
     * Filter the query on the cle_externe_edition column
     *
     * Example usage:
     * <code>
     * $query->filterByCleExterneEdition(1234); // WHERE cle_externe_edition = 1234
     * $query->filterByCleExterneEdition(array(12, 34)); // WHERE cle_externe_edition IN (12, 34)
     * $query->filterByCleExterneEdition(array('min' => 12)); // WHERE cle_externe_edition >= 12
     * $query->filterByCleExterneEdition(array('max' => 12)); // WHERE cle_externe_edition <= 12
     * </code>
     *
     * @param     mixed $cleExterneEdition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByCleExterneEdition($cleExterneEdition = null, $comparison = null)
    {
        if (is_array($cleExterneEdition)) {
            $useMinMax = false;
            if (isset($cleExterneEdition['min'])) {
                $this->addUsingAlias(CommonTEditionFormulairePeer::CLE_EXTERNE_EDITION, $cleExterneEdition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cleExterneEdition['max'])) {
                $this->addUsingAlias(CommonTEditionFormulairePeer::CLE_EXTERNE_EDITION, $cleExterneEdition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::CLE_EXTERNE_EDITION, $cleExterneEdition, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the extension column
     *
     * Example usage:
     * <code>
     * $query->filterByExtension('fooValue');   // WHERE extension = 'fooValue'
     * $query->filterByExtension('%fooValue%'); // WHERE extension LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extension The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByExtension($extension = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extension)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extension)) {
                $extension = str_replace('*', '%', $extension);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::EXTENSION, $extension, $comparison);
    }

    /**
     * Filter the query on the path column
     *
     * Example usage:
     * <code>
     * $query->filterByPath('fooValue');   // WHERE path = 'fooValue'
     * $query->filterByPath('%fooValue%'); // WHERE path LIKE '%fooValue%'
     * </code>
     *
     * @param     string $path The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByPath($path = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($path)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $path)) {
                $path = str_replace('*', '%', $path);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::PATH, $path, $comparison);
    }

    /**
     * Filter the query on the hash column
     *
     * Example usage:
     * <code>
     * $query->filterByHash('fooValue');   // WHERE hash = 'fooValue'
     * $query->filterByHash('%fooValue%'); // WHERE hash LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hash The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByHash($hash = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hash)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hash)) {
                $hash = str_replace('*', '%', $hash);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::HASH, $hash, $comparison);
    }

    /**
     * Filter the query on the signature column
     *
     * Example usage:
     * <code>
     * $query->filterBySignature('fooValue');   // WHERE signature = 'fooValue'
     * $query->filterBySignature('%fooValue%'); // WHERE signature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterBySignature($signature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signature)) {
                $signature = str_replace('*', '%', $signature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::SIGNATURE, $signature, $comparison);
    }

    /**
     * Filter the query on the date_generation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateGeneration('fooValue');   // WHERE date_generation = 'fooValue'
     * $query->filterByDateGeneration('%fooValue%'); // WHERE date_generation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateGeneration The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByDateGeneration($dateGeneration = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateGeneration)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateGeneration)) {
                $dateGeneration = str_replace('*', '%', $dateGeneration);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::DATE_GENERATION, $dateGeneration, $comparison);
    }

    /**
     * Filter the query on the date_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDepot('fooValue');   // WHERE date_depot = 'fooValue'
     * $query->filterByDateDepot('%fooValue%'); // WHERE date_depot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDepot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByDateDepot($dateDepot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDepot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDepot)) {
                $dateDepot = str_replace('*', '%', $dateDepot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::DATE_DEPOT, $dateDepot, $comparison);
    }

    /**
     * Filter the query on the statut_generation column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutGeneration(1234); // WHERE statut_generation = 1234
     * $query->filterByStatutGeneration(array(12, 34)); // WHERE statut_generation IN (12, 34)
     * $query->filterByStatutGeneration(array('min' => 12)); // WHERE statut_generation >= 12
     * $query->filterByStatutGeneration(array('max' => 12)); // WHERE statut_generation <= 12
     * </code>
     *
     * @param     mixed $statutGeneration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByStatutGeneration($statutGeneration = null, $comparison = null)
    {
        if (is_array($statutGeneration)) {
            $useMinMax = false;
            if (isset($statutGeneration['min'])) {
                $this->addUsingAlias(CommonTEditionFormulairePeer::STATUT_GENERATION, $statutGeneration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutGeneration['max'])) {
                $this->addUsingAlias(CommonTEditionFormulairePeer::STATUT_GENERATION, $statutGeneration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::STATUT_GENERATION, $statutGeneration, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType(1234); // WHERE type = 1234
     * $query->filterByType(array(12, 34)); // WHERE type IN (12, 34)
     * $query->filterByType(array('min' => 12)); // WHERE type >= 12
     * $query->filterByType(array('max' => 12)); // WHERE type <= 12
     * </code>
     *
     * @param     mixed $type The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (is_array($type)) {
            $useMinMax = false;
            if (isset($type['min'])) {
                $this->addUsingAlias(CommonTEditionFormulairePeer::TYPE, $type['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($type['max'])) {
                $this->addUsingAlias(CommonTEditionFormulairePeer::TYPE, $type['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEditionFormulairePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query by a related CommonTDossierFormulaire object
     *
     * @param   CommonTDossierFormulaire|PropelObjectCollection $commonTDossierFormulaire The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTEditionFormulaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTDossierFormulaire($commonTDossierFormulaire, $comparison = null)
    {
        if ($commonTDossierFormulaire instanceof CommonTDossierFormulaire) {
            return $this
                ->addUsingAlias(CommonTEditionFormulairePeer::ID_DOSSIER_FORMULAIRE, $commonTDossierFormulaire->getIdDossierFormulaire(), $comparison);
        } elseif ($commonTDossierFormulaire instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTEditionFormulairePeer::ID_DOSSIER_FORMULAIRE, $commonTDossierFormulaire->toKeyValue('PrimaryKey', 'IdDossierFormulaire'), $comparison);
        } else {
            throw new PropelException('filterByCommonTDossierFormulaire() only accepts arguments of type CommonTDossierFormulaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTDossierFormulaire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function joinCommonTDossierFormulaire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTDossierFormulaire');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonTDossierFormulaire');
        }

        return $this;
    }

    /**
     * Use the CommonTDossierFormulaire relation CommonTDossierFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTDossierFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonTDossierFormulaireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTDossierFormulaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTDossierFormulaire', 'CommonTDossierFormulaireQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTEditionFormulaire $commonTEditionFormulaire Object to remove from the list of results
     *
     * @return CommonTEditionFormulaireQuery The current query, for fluid interface
     */
    public function prune($commonTEditionFormulaire = null)
    {
        if ($commonTEditionFormulaire) {
            $this->addUsingAlias(CommonTEditionFormulairePeer::ID_EDITION_FORMULAIRE, $commonTEditionFormulaire->getIdEditionFormulaire(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
